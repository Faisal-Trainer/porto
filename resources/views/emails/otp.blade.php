<x-mail::message>
    {{ __('# Email Verification') }}

    {{__('Hi there,')}}

    {{ __('Thank you for reaching out to us. To complete your submission, please use the verification code below:') }}

    <x-mail::panel>
        <h1 style="text-align: center; letter-spacing: 5px; font-size: 32px; color: #6366f1;">{{ $otp }}</h1>
    </x-mail::panel>

    {{ __('This code will expire in **10 minutes**. If you did not request this, please ignore this email.') }}

    {{ __('Best regards,') }}<br>
    {{ config('app.name') }}
</x-mail::message>