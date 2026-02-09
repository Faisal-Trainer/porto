<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Fortify;

class AuthenticateUser
{
    public function authenticate(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                Fortify::username() => __('auth.failed'),
            ]);
        }

        // ⛔ BLOK JIKA BELUM DIAKTIVASI ADMIN
        if ($user->status !== 'active') {
            throw ValidationException::withMessages([
                Fortify::username() => 'Akun kamu belum diaktifkan oleh admin.',
            ]);
        }

        return $user;
    }
}
