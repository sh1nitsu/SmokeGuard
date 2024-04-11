<x-app-layout>
    <x-message />

    <a class="p-2 rounded-md" href="{{ asset('contacts') }}">
        <div class="flex items-center p-1 text-xs text-black">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
            Go Back
        </div>
    </a>

    <div class="pt-4 rounded-md text-center">
        <div class="w-11/12 mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-1 text-2xl font-bold text-black">
                    Add a Contact
                </div>
            </div>
        </div>
    </div>

    <div class="w-11/12 pt-2 mx-auto sm:px-6 lg:px-8">
        <form method="POST" action="{{ route('store') }}">
            @csrf
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Enter Contact Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-2">
                <x-input-label for="email" :value="__('Enter Contact Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!--phoneNumber-->
            <div class="mt-2">
                <x-input-label for="phone" :value="__('Enter Contact Phone Number')" />
                <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-primary-button class="w-11/12 py-3 flex justify-center">
                    {{ __('Add Contact') }}
                </x-primary-button>
            </div>
        </form>
    </div>

</x-app-layout>
