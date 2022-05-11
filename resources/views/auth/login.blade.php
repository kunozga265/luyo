<x-auth-layout>
    <x-auth-card>
        {{--<x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>--}}



        <div class="login d-flex justify-content-center align-items-center bg-light">
            <form method="POST" action="{{ route('login') }}">

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

            @csrf

            <!-- Email Address -->
            {{--<div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required autocomplete="current-password" />
            </div>--}}

            {{--<!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
--}}
            {{--<div class="text-center">
                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>--}}

            <!-- Email -->
                <div class="material__form-group form-group">
                    <input type="email" name="email" id="email" class="form-input material__input" required="" autocomplete="luyo-email">
                    <label for="email" class="material__label">Email</label>
                    <span class="material__underline"></span>
                </div>

                <!-- Password -->
                <div class="material__form-group form-group">
                    <input type="password" name="password" id="password" class="form-input material__input" required="" autocomplete="luyo-password">
                    <label for="name" class="material__label">Password</label>
                    <span class="material__underline"></span>
                </div>

                <div>
                    <input type="submit" class="btn btn--lg btn--color btn--button" value="Login" id="submit-message">
                </div>

              {{--  <div>
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>--}}

            </form>
        </div>
    </x-auth-card>
</x-auth-layout>


