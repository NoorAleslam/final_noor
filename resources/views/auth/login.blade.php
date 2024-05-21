<x-guest-layout style="
    background-image: url('{{ asset('2024-05-20 05_20_39-Greenshot.png') }}');
    background-size: cover;
    background-position: center;
    width: 300vw;
    height: 100vh;
    background-repeat: no-repeat;
">

    <x-authentication-card>
        <x-slot name="logo">
        </x-slot>

        <style>
            .centered-flex {
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>
         <style>
            .form-background {
                background-image: url('{{ asset('2024-05-20 05_20_39-Greenshot.png') }}'); /* ضع مسار الصورة هنا */
                background-size: cover; /* تغطية كامل الفورم بالصورة */
                background-position: center; /* تمركز الصورة في وسط الفورم */
                background-repeat: no-repeat; /* منع تكرار الصورة */
                padding: 20px; /* إضافة بعض التباعد داخل الفورم */
                border-radius: 10px; /* إضافة زوايا دائرية للفورم */
                filter:blur(0px);/* إضافةتأثيرات للصورة  */
                z-index:-1;
                opacity:0.7;
            }
        </style>

        <div class="centered-flex">
            <img src="{{ asset('332-3321467_graduate-hat-icon-graduation-cap-logo-png-transparent.png') }}" alt="Description of the image" width="50" height="30">
        </div>

        <x-validation-errors class="mb-4" />

        @session('status')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ $value }}
        </div>
        @endsession

        <form method="POST" action="{{ route('login') }}" class="form-background">
            @csrf

            <div>
                <x-label for="email" value="{{ ('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ ('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ ('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ ('Forgot your password?') }}
                </a>
                @endif
                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>

    </x-authentication-card>
</x-guest-layout>
