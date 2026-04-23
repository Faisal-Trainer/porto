<div>
    @if ($step === 1)
        <form wire:submit="sendOtp">
            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="label p-1 text-base w-full" type="text" wire:model="name"
                    required autofocus autocomplete="name" />
                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="label p-1 text-base w-full" type="email" wire:model="email"
                    required autocomplete="username" />
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="label p-1 text-base w-full" type="password" wire:model="password" required
                    autocomplete="new-password" />
                @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="label p-1 text-base w-full" type="password"
                    wire:model="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4" wire:loading.attr="disabled">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    @elseif ($step === 2)
        <form wire:submit="verifyOtp">
            <div class="mb-4 text-sm text-gray-600">
                {{ __('An OTP code has been sent to your email address. Please enter it below to complete your registration.') }}
            </div>

            <div>
                <x-label for="otpCode" value="{{ __('OTP Code') }}" />
                <x-input id="otpCode" class="label p-1 text-base w-full text-center tracking-widest text-lg" type="text" wire:model="otpCode"
                    required autofocus maxlength="6" placeholder="------" />
                @error('otpCode') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="flex items-center justify-between mt-4">
                <button type="button" wire:click="$set('step', 1)" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Back') }}
                </button>

                <x-button class="ms-4" wire:loading.attr="disabled">
                    {{ __('Verify & Register') }}
                </x-button>
            </div>
        </form>
    @endif
</div>
