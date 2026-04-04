<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreContactRequest extends FormRequest
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
            'username' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:100'],
            'phone' => ['required', 'string', 'max:20'],
            'category' => [
                'required',
                Rule::in([
                    'web_application',
                    'it_support',
                    'ui_ux',
                    'digital_consulting',
                    'goes_to_school',
                    'social_media',
                    'other',
                ]),
            ],
            'message' => ['required', 'string', 'max:1000'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'username.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'phone.required' => 'Nomor telepon wajib diisi.',
            'category.required' => 'Pilih kategori layanan.',
            'category.in' => 'Pilihan kategori tidak valid.',
            'message.required' => 'Pesan wajib diisi.',
            'message.max' => 'Pesan tidak boleh lebih dari 1000 karakter.',
        ];
    }
}
