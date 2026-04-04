<?php

namespace App\Http\Controllers;

use App\Actions\NotifyAdmins;
use App\Http\Requests\StoreTalentRequest;
use App\Mail\NewTalentMail;
use App\Models\Talent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class TalentController
{
    /**
     * Tampilkan form daftar talent
     */
    public function create()
    {
        return view('pages.talent');
    }

    /**
     * Simpan data talent baru
     */
    public function store(StoreTalentRequest $request)
    {
        $validated = $request->validated();

        $cvPath = null;
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('talents/cv', 'public');
        }

        $talent = Talent::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'skill' => $validated['skill'],
            'experience' => $validated['experience'],
            'availability' => $validated['availability'],
            'bio' => $validated['bio'],
            'cv_path' => $cvPath,
        ]);

        Mail::to(config('mail.admin_email'))->queue(new NewTalentMail($talent));
        NotifyAdmins::newTalent($talent);

        return redirect()->route('talent.create')
            ->with('success', 'Pendaftaran berhasil! Saya akan menghubungi kamu segera lewat WhatsApp atau email.');
    }

    /**
     * Daftar semua talent (admin only)
     */
    public function index()
    {
        $talents = Talent::latest()->paginate(10);
        $unreadCount = Talent::unread()->count();

        return view('admin.talent', compact('talents', 'unreadCount'));
    }

    /**
     * Detail talent + tandai sudah dibaca (admin only)
     */
    public function show(Talent $talent)
    {
        $talent->markAsRead();

        return view('admin.talents.show', compact('talent'));
    }

    /**
     * Hapus data talent (admin only)
     */
    public function destroy(Talent $talent)
    {
        if ($talent->cv_path) {
            Storage::disk('public')->delete($talent->cv_path);
        }

        $talent->delete();

        return redirect()->back()->with('success', 'Data talent berhasil dihapus.');
    }
}
