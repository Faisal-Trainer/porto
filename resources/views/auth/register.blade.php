<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <livewire:auth.register-with-otp />
    </x-authentication-card>
</x-guest-layout>
