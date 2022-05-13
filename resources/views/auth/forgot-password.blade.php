<x-auth-layout>
    <x-auth-card>
      {{--  <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>--}}



        <div class="login d-flex justify-content-center align-items-center bg-light">


            <form method="POST" action="{{ route('password.email') }}">
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                @csrf

                <!-- Email Address -->
                <div class="mt-24 material__form-group form-group">
                    <input type="email" name="email" id="email" class="form-input material__input" required="" autocomplete="luyo-email">
                    <label for="email" class="material__label">Email</label>
                    <span class="material__underline"></span>
                </div>

                <div>
                    <input type="submit" class="btn btn--lg btn--color btn--button" value="Email Password Reset Link" id="submit-message">
                </div>
            </form>
        </div>
    </x-auth-card>
</x-auth-layout>
