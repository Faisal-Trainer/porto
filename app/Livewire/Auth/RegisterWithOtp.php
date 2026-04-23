<?php

namespace App\Livewire\Auth;

use App\Mail\RegistrationOtpMail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Livewire\Component;

class RegisterWithOtp extends Component
{
    public $name = '';

    public $email = '';

    public $password = '';

    public $password_confirmation = '';

    public $step = 1;

    public $otpCode = '';

    public function sendOtp()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed', Password::defaults()],
        ]);

        $otp = (string) random_int(100000, 999999);

        // Store OTP in cache for 15 minutes
        Cache::put('registration_otp_'.$this->email, $otp, now()->addMinutes(15));

        // Send OTP email
        Mail::to($this->email)->send(new RegistrationOtpMail($otp));

        $this->step = 2;
    }

    public function verifyOtp()
    {
        $this->validate([
            'otpCode' => ['required', 'string', 'size:6'],
        ]);

        $cachedOtp = Cache::get('registration_otp_'.$this->email);

        if (! $cachedOtp || $cachedOtp !== $this->otpCode) {
            $this->addError('otpCode', 'The OTP code is invalid or has expired.');

            return;
        }

        // Clear OTP
        Cache::forget('registration_otp_'.$this->email);

        // Use Fortify's CreateNewUser to save to DB
        $creator = app(CreatesNewUsers::class);

        $user = $creator->create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'password_confirmation' => $this->password_confirmation,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.auth.register-with-otp');
    }
}
