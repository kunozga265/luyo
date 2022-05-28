<x-app-layout>
    <x-slot name="heading">
        Change Password
    </x-slot>

    <x-slot name="breadcrumbs">
    </x-slot>

    <form method="POST" action="{{ route('change-password') }}">

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        @csrf

        <!-- Password -->
        <div class="material__form-group form-group">
            <span>Password</span>
            <input type="password" name="password" id="password" class="form-input material__input" required="" autocomplete="luyo-password">
        </div>

        <!-- New Password -->
        <div class="material__form-group form-group">
            <span>New Password</span>
            <input type="password" name="newPassword" id="newPassword" class="form-input material__input" required="" autocomplete="luyo-new-password">
        </div>

        <div>
            <input type="submit" class="btn btn--lg btn--color btn--button" value="Update Password" id="submit-message">
        </div>
    </form>

</x-app-layout>
