<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProjectRequest extends FormRequest
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
            'judul' => ['required', 'string', 'max:255'],
            'kategori' => [
                'required',
                Rule::in([
                    'web_application',
                    'education',
                    'social_media',
                    'it_support',
                    'dashboard',
                ]),
            ],
            'deskripsi' => ['required', 'string'],
            'thumbnail' => ['required', 'image', 'max:2048'],
            'demo_url' => ['nullable', 'url'],
            'tanggal_rilis' => ['nullable', 'date'],
            'technologies' => ['nullable', 'array'],
            'technologies.*' => ['exists:technologies,id'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'judul.required' => 'Judul project wajib diisi.',
            'judul.max' => 'Judul project maksimal 255 karakter.',
            'kategori.required' => 'Pilih kategori project.',
            'kategori.in' => 'Kategori project tidak valid.',
            'deskripsi.required' => 'Deskripsi project wajib diisi.',
            'thumbnail.required' => 'Thumbnail project wajib diupload.',
            'thumbnail.image' => 'Thumbnail harus berupa gambar.',
            'thumbnail.max' => 'Ukuran thumbnail maksimal 2MB.',
            'demo_url.url' => 'Format URL demo tidak valid.',
            'tanggal_rilis.date' => 'Format tanggal rilis tidak valid.',
            'technologies.array' => 'Daftar teknologi harus berupa array.',
            'technologies.*.exists' => 'Teknologi yang dipilih tidak valid.',
        ];
    }
}
