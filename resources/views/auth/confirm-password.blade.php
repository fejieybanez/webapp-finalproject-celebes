    <x-guest-layout>
        <!-- Presents a password confirmation form, likely used for accessing a secure area -->
        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>
<!-- Uses a guest layout (x-guest-layout), suggesting it's designed for unauthenticated users. -->
        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
<!-- Password field:
Requires the user to enter their password.
Displays error messages if validation fails. -->
            <div>
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
<!-- Confirm button: Submits the form for password verification. -->
            <div class="flex justify-end mt-4">
                <x-primary-button>
                    {{ __('Confirm') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>
