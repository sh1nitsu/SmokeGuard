<x-app-layout>
    <x-message />

    @if (Auth::User()->role == 'admin')
        <div class="bg-red-200 w-full py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img src="storage/smokeguard.png" class="h-10 ml-3">
                    <h1 class="font-abnes mt-1 text-orange-500 text-xl font-bold ml-3">SmokeGuard</h1>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                          </svg>
                    </x-dropdown-link>
                </form>
            </div>
        </div>

        <h1 class="tracking-widest py-5 text-orange-500 text-xl font-extrabold text-center border-b-2 ">Admin Dashboard</h1>
        <div class="pt-3">
            <div class="w-11/12 mx-auto">
                <div class="flex items-center">
                <img src="storage/smokeguard.png" class="h-10 ml-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="gray" class="w-6 h-6 ml-3 mt-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                  </svg>
                <h1 class=" mt-2 text-orange-500 text-xl font-bold ml-3">Users List</h1>
                </div>
            </div>
        </div>

        <div class="pt-2 w-11/12 mx-auto">
            <livewire:user-table />
        </div>

    @else
        <div class="flex justify-end">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                        this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </div>

        <div class="flex justify-center">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div>
        <div class="flex justify-center">
            <a href="/">
                <h1 class="font-abnes mt-4 text-orange-500 text-2xl font-bold">SmokeGuard</h1>
            </a>
        </div>

        <div class="pt-2 rounded-md">
            <div class="w-11/12 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white border border-red-500 overflow-hidden shadow-lg rounded-lg">
                    <div class="p-3 text-gray-900">
                        Hello! {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}!
                    </div>
                </div>
            </div>
        </div>

        <div class="py-3 rounded-md">
            <div class="w-11/12 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white border border-red-500 overflow-hidden shadow-sm rounded-lg">
                    <div class="flex justify-between items-center">
                        <div class="p-1 text-gray-900">
                            Contacts
                        </div>
                        <a href="{{ asset('contacts') }}" class="hover:underline">
                            <div class="p-1 text-gray-900 text-xs">
                                View more
                            </div>
                        </a>
                    </div>
                    <ul class="flex items-center text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                        @forelse ($contacts as $contact)
                            <li class="ml-3">
                                <a href="#" class="hover:underline  text-gray-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="gray" class="w-20 h-20">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    {{ $contact->name }}
                                </a>
                            </li>
                        @empty
                            <div>
                                <div class="ml-2 text-gray-900 p-5">
                                    No Contact Added Yet.
                                </div>
                            </div>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>


        <div class="">
            <div class="w-11/12 mx-auto sm:px-6 lg:px-8 ">
                <div class="bg-white border border-red-500 overflow-hidden shadow-sm rounded-lg">
                    <div class="p-14 text-gray-900 font-bold">
                        {{ __('There is no smoke detected.') }}
                    </div>
                </div>
            </div>
        </div>

        <footer class="fixed bottom-0 bg-gradient-to-r from-red-500 to-orange-400 w-full shadow dark:bg-gray-800">
            <div class="w-11/12 mx-auto max-w-screen-xl p-4   md:flex md:items-center md:justify-between">
                <ul
                    class="flex justify-between items-center text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                    <li>
                        <a href="{{ asset('dashboard') }}" class="hover:underline">
                            <i class="ri-home-3-line text-3xl text-white"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('contacts') }}" class="hover:underline">
                            <i class="ri-contacts-book-line text-3xl text-white"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('emergency') }}" class="hover:underline">
                            <i class="ri-customer-service-line text-3xl text-white"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('temperature') }}" class="hover:underline">
                            <i class="ri-pulse-fill text-3xl text-white"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    @endif
</x-app-layout>
