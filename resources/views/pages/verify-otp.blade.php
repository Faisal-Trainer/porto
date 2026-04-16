<x-app-layout>
    <div
        class="relative h-min-screen flex flex-col items-center justify-center overflow-hidden bg-(--color-bg-light) py-10 md:py-20">
        <div
            class="relative w-[95%] md:w-full max-w-lg rounded-2xl bg-(--color-primary-100) p-2 md:px-6 md:py-10 mx-auto border-4 border-(--color-accent-500)">
            <div class="mx-auto flex w-full flex-col space-y-16">
                <div class="flex flex-col items-center justify-center space-y-2 text-center">
                    <div class=" text-xl md:text-3xl font-bold text-(--color-primary-950)">Email Verification</div>
                    <div class="flex flex-row text-sm font-medium text-(--color-primary-950)">
                        <p>We have sent a verification code to your email</p>
                    </div>
                </div>

                <div>
                    <form action="{{ route('otp.verify') }}" method="post">
                        @csrf
                        <input type="hidden" name="type" value="{{ request('type') }}">
                        <div class="flex flex-col space-y-10">
                            <div class="flex flex-row items-center justify-between mx-auto w-full max-w-xs">
                                <div class="w-full h-16">
                                    <input name="otp"
                                        class="w-full h-full flex flex-col items-center justify-center text-center px-5 outline-none rounded-xl border border-slate-200 text-3xl font-bold bg-white focus:bg-slate-50 focus:ring-1 ring-purple-600 transition-all duration-200"
                                        type="text" maxlength="6" autofocus placeholder="······">
                                </div>
                            </div>

                            @if ($errors->any())
                                <div class="text-center text-red-500 text-sm font-medium">
                                    {{ $errors->first() }}
                                </div>
                            @endif

                            <div class="flex flex-col space-y-5">
                                <div>
                                    <x-button-primary-purple
                                        class="flex flex-row items-center justify-center text-center w-full border rounded-xl outline-none py-5 bg-purple-600 border-none text-white text-sm font-bold shadow-sm hover:bg-purple-700 transition-all duration-200">
                                        Verify Submission
                                    </x-button-primary-purple>
                                </div>

                                <div
                                    class="flex flex-row items-center justify-center text-center text-sm font-medium space-x-1 text-slate-500">
                                    <p>Didn't receive code?</p>
                                    <a class="flex flex-row items-center text-(--color-primary-900) hover:brightness-200 font-semibold"
                                        href="#"
                                        onclick="alert('Please re-submit the form to get a new code.'); return false;">Resend</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
