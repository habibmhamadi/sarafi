<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('از ثبت نام شما سپاسگزاریم! آیا می توانید قبل از شروع کار ، آدرس ایمیل خود را با کلیک روی لینکی که برای شما ایمیل کردیم ، تأیید کنید؟ اگر ایمیل را دریافت نکردید ، ما با خوشحالی ایمیل دیگری را برای شما ارسال می کنیم.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('یک لینک تأییدی جدید به آدرس ایمیلی که هنگام ثبت نام ارسال کرده اید ارسال شده است.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('ایمیل تایید را دوباره بفرست') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('خروج') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
