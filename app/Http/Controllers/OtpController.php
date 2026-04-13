<?php

namespace App\Http\Controllers;

use App\Actions\NotifyAdmins;
use App\Mail\NewContactMail;
use App\Mail\NewTalentMail;
use App\Models\Customer;
use App\Models\Talent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class OtpController
{
    public function show(Request $request)
    {
        $type = $request->query('type');
        if (! in_array($type, ['contact', 'talent'])) {
            abort(404);
        }

        $sessionKey = "pending_{$type}_data";
        if (! session()->has($sessionKey)) {
            return redirect()->route($type === 'talent' ? 'talent.create' : 'contact.create')
                ->with('error', 'Sesi anda telah berakhir. Silakan isi kembali formulir.');
        }

        return view('pages.verify-otp', compact('type'));
    }

    public function verify(Request $request)
    {
        $request->validate([
            'otp' => 'required|string|size:6',
            'type' => 'required|in:contact,talent',
        ]);

        $type = $request->input('type');
        $sessionKey = "pending_{$type}_data";
        $data = session($sessionKey);

        if (! $data) {
            return redirect()->route($type === 'talent' ? 'talent.create' : 'contact.create')
                ->with('error', 'Sesi anda telah berakhir. Silakan isi kembali formulir.');
        }

        $email = $data['email'];
        $cachedOtp = Cache::get("otp_{$email}");

        if ($request->otp !== $cachedOtp) {
            return back()->withErrors(['otp' => 'Kode OTP yang kamu masukkan tidak valid atau sudah kadaluarsa.']);
        }

        // OTP Valid - Save Data
        if ($type === 'contact') {
            $customer = Customer::create($data);
            Mail::to(config('mail.admin_email'))->send(new NewContactMail($customer));
            NotifyAdmins::newContact($customer);

            session()->forget($sessionKey);
            Cache::forget("otp_{$email}");

            return redirect()->route('contact.create')->with('success', 'Terima kasih, pesan kamu sudah kami terima! Kami akan segera menghubungi kamu.');
        } else {
            // Talent
            $tempCvPath = $data['cv_path'] ?? null;
            $finalCvPath = null;

            if ($tempCvPath && Storage::disk('local')->exists($tempCvPath)) {
                $finalName = str_replace('talents/temp/', 'talents/cv/', $tempCvPath);
                Storage::disk('local')->move($tempCvPath, $finalName);
                $finalCvPath = $finalName;
            }

            $talentData = $data;
            $talentData['cv_path'] = $finalCvPath;
            $talent = Talent::create($talentData);

            Mail::to(config('mail.admin_email'))->send(new NewTalentMail($talent));
            NotifyAdmins::newTalent($talent);

            session()->forget($sessionKey);
            Cache::forget("otp_{$email}");

            return redirect()->route('talent.create')
                ->with('success', 'Pendaftaran berhasil! Saya akan menghubungi kamu segera lewat WhatsApp atau email.');
        }
    }
}
