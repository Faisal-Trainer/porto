<?php

namespace App\Http\Controllers;

use App\Models\Talent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TalentController extends Controller
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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|email|max:255',
            'phone'        => 'required|string|max:20',
            'skill'        => 'required|in:frontend,backend,fullstack,uiux,social_media,it_support,other',
            'experience'   => 'required|in:beginner,junior,intermediate',
            'availability' => 'required|in:lt10,10-20,20-40,fulltime',
            'bio'          => 'required|string|min:20|max:1000',
            'cv'           => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:5120', // max 5MB
        ], [
            'name.required'         => 'Nama lengkap wajib diisi.',
            'email.required'        => 'Email wajib diisi.',
            'email.email'           => 'Format email tidak valid.',
            'phone.required'        => 'Nomor WhatsApp wajib diisi.',
            'skill.required'        => 'Pilih skill utama kamu.',
            'skill.in'              => 'Pilihan skill tidak valid.',
            'experience.required'   => 'Pilih level pengalaman kamu.',
            'experience.in'         => 'Pilihan pengalaman tidak valid.',
            'availability.required' => 'Pilih ketersediaan waktu kamu.',
            'availability.in'       => 'Pilihan ketersediaan tidak valid.',
            'bio.required'          => 'Ceritakan sedikit tentang dirimu.',
            'bio.min'               => 'Ceritakan lebih detail, minimal 20 karakter.',
            'cv.mimes'              => 'File CV harus berformat PDF, JPG, atau PNG.',
            'cv.max'                => 'Ukuran file maksimal 5MB.',
        ]);

        // Handle upload CV
        $cvPath = null;
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('talents/cv', 'public');
        }

        Talent::create([
            'name'         => $validated['name'],
            'email'        => $validated['email'],
            'phone'        => $validated['phone'],
            'skill'        => $validated['skill'],
            'experience'   => $validated['experience'],
            'availability' => $validated['availability'],
            'bio'          => $validated['bio'],
            'cv_path'      => $cvPath,
        ]);

        return redirect()->route('talent.create')
            ->with('success', 'Pendaftaran berhasil! Saya akan menghubungi kamu segera lewat WhatsApp atau email.');
    }

    /**
     * Daftar semua talent (admin only)
     */
    public function index()
    {
        $talents = Talent::latest()->paginate(15);
        $unreadCount = Talent::unread()->count();

        return view('admin.talents.index', compact('talents', 'unreadCount'));
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
        // Hapus file CV dari storage kalau ada
        if ($talent->cv_path) {
            Storage::disk('public')->delete($talent->cv_path);
        }

        $talent->delete();

        return redirect()->route('talent.index')
            ->with('success', 'Data talent berhasil dihapus.');
    }
}
