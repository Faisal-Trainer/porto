<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTalentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, array<int, mixed>>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'skill' => ['required', 'in:frontend,backend,fullstack,uiux,social_media,copywriting,it_support,other'],
            'experience' => ['required', 'in:beginner,junior,intermediate'],
            'availability' => ['required', 'in:lt10,10-20,20-40,fulltime'],
            'bio' => ['required', 'string', 'min:20', 'max:1000'],
            'cv' => ['nullable', 'file', 'mimes:pdf,jpg,jpeg,png', 'max:5120'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama lengkap wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'phone.required' => 'Nomor WhatsApp wajib diisi.',
            'skill.required' => 'Pilih skill utama kamu.',
            'skill.in' => 'Pilihan skill tidak valid.',
            'experience.required' => 'Pilih level pengalaman kamu.',
            'experience.in' => 'Pilihan pengalaman tidak valid.',
            'availability.required' => 'Pilih ketersediaan waktu kamu.',
            'availability.in' => 'Pilihan ketersediaan tidak valid.',
            'bio.required' => 'Ceritakan sedikit tentang dirimu.',
            'bio.min' => 'Ceritakan lebih detail, minimal 20 karakter.',
            'cv.mimes' => 'File CV harus berformat PDF, JPG, atau PNG.',
            'cv.max' => 'Ukuran file maksimal 5MB.',
        ];
    }
}
