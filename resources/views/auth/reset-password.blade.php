<x-auth-layout>
    <x-auth-card>

        <div class="login d-flex justify-content-center align-items-center bg-light">

            <form method="POST" action="{{ route('password.update') }}">

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
            @csrf

            <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email -->
                <div class="material__form-group form-group">
                    <input type="email" name="email" id="email" class="form-input material__input" required="" autocomplete="luyo-email">
                    <label for="email" class="material__label">Email</label>
                    <span class="material__underline"></span>
                </div>

                <!-- Password -->
                <div class="material__form-group form-group">
                    <input type="password" name="password" id="password" class="form-input material__input" required="" autocomplete="luyo-password">
                    <label for="password" class="material__label">Password</label>
                    <span class="material__underline"></span>
                </div>

                <!-- Confirm Password -->
                <div class="material__form-group form-group">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-input material__input" required="" autocomplete="luyo-password">
                    <label for="password_confirmation" class="material__label">Confirm Password</label>
                    <span class="material__underline"></span>
                </div>

                <div>
                    <input type="submit" class="btn btn--lg btn--color btn--button" value="Reset Password" id="submit-message">
                </div>
            </form>

        </div>

    </x-auth-card>
</x-auth-layout>
