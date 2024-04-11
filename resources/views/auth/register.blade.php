<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="first_name" :value="__('First Name')" />
            <x-text-input id="first_name" class="block mt-1 w-full"
                            type="text"
                            name="first_name"
                            :value="old('first_name')"
                            required autofocus autocomplete="first_name" />

            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>

        <div class="mt-2">
            <x-input-label for="last_name" :value="__('Last Name')" />
            <x-text-input id="last_name" class="block mt-1 w-full"
                            type="text"
                            name="last_name"
                            :value="old('last_name')"
                            autofocus autocomplete="last_name" />

            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="middle_name" :value="__('Middle Name')" />
            <x-text-input id="middle_name" class="block mt-1 w-full"
                            type="text"
                            name="middle_name"
                            :value="old('middle_name')"
                            autofocus autocomplete="middle_name" />

            <x-input-error :messages="$errors->get('middle_name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="birthday" :value="__('Birth Date')" />
            <x-text-input id="birthday" class="block mt-1 w-full"
                            type="date"
                            name="birthday"
                            :value="old('birthday')"
                            autofocus autocomplete="birthday" />

            <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full"
                            type="text"
                            name="address"
                            :value="old('address')"
                            autofocus autocomplete="address" />

            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-2">
            <x-input-label for="email" :value="__('Enter your Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!--phoneNumber-->
        <div class="mt-2">
            <x-input-label for="phone" :value="__('Enter your Phone Number')" />
            <x-text-input id="phone" class="block mt-1 w-full"
                            type="text"
                            name="phone"
                            :value="old('phone')"
                            required autocomplete="phone" />

            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-2">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-2">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="w-full py-3 flex justify-center">
                {{ __('Sign up') }}
            </x-primary-button>
        </div>

        <div class="flex justify-center mt-2">
            <h1 class="text-xs text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __("Already have an account? ") }}
            </h1>

            <a class=" ml-1 text-xs text-blue-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                Login
            </a>
        </div>

    </form>
</x-guest-layout>
