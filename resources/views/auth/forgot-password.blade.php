<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('رمز عبور خود را فراموش کرده اید؟ مشکلی نیست. فقط آدرس ایمیل خود را بنویسید و ما ایمیل بازنشانی رمز عبور را برای شما میفرستیم که به شما امکان می دهد یک رمز عبور جدید انتخاب کنید.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('ایمیل')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('ارسال ایمیل بازیافتی') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
