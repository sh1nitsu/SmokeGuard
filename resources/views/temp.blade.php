<x-app-layout>
    {{-- <div class="flex justify-center pt-4">
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
            <div class="bg-white border border-red-500 overflow-hidden shadow-xl sm:rounded-lg">
                <div clasgray-9003 text-white">
                    Hello,
                    Temperature
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="py-8 rounded-md">
        <div class="w-11/12 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white border border-red-500 overflow-hidden shadow-xl sm:rounded-lg">
                <div clasgray-9001 text-white">
                    Contacts
                </div>
                <ul class="flex justify-between items-center text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                    <li class="text-center">
                        <a href="#" class="hover:underline  text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-20 h-20">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                              </svg>
                              Kim
                        </a>
                    </li>
                    <li class="text-center">
                        <a href="#" class="hover:underline text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-20 h-20">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                              </svg>
                              Joana
                        </a>
                    </li>
                    <li class="text-center">
                        <a href="#" class="hover:underline text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-20 h-20">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                              </svg>
                              Karl
                        </a>
                    </li>
                    <li class="text-center">
                        <a href="#" class="hover:underline text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-20 h-20">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                              </svg>
                              Jasmin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="pt-5">
        <div class="w-11/12 mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white border border-red-500 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-14 texgray-900te font-bold">
                    {{ __('There is no smoke detected.') }}
                </div>
            </div>
        </div>
    </div>


    <footer class="fixed bottom-0 bg-red-700 w-full shadow dark:bg-gray-800">
        <div class="w-full mx-auto max-w-screen-xl p-4   md:flex md:items-center md:justify-between">
            <ul class="flex justify-between items-center text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                <li>
                    <a href="{{ asset('dashboard') }}" class="hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="white" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>

                    </a>
                </li>
                <li>
                    <a href="{{ asset('contacts') }}" class="hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="white" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ asset('emergency') }}" class="hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="white" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ asset('temperature' )}}" class="hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="white" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 18a3.75 3.75 0 0 0 .495-7.468 5.99 5.99 0 0 0-1.925 3.547 5.975 5.975 0 0 1-2.133-1.001A3.75 3.75 0 0 0 12 18Z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </footer> --}}

    <a class="p-2 rounded-md" href="{{ asset('dashboard') }}">
        <div class="flex items-center p-1 text-xs text-black">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
            Go Back
        </div>
    </a>

    <div class="pt-4 rounded-md ">
        <div class="w-11/12 mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden  sm:rounded-lg">
                <div class="p-1 text-2xl font-bold text-black text-center">
                    TEMPERATURE OF ROOMS
                </div>
                <div class="text-lg font-bold text-gray-500 text-center">
                    You can add a new Room.
                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-center mt-4">
        <x-primary-button class="w-11/12 py-3 flex justify-center">
            <a href="{{ asset('add-room') }}">{{ __('Add Room') }}</a>
        </x-primary-button>
    </div>

    <div>
        <div class="grid gap-5 grid-cols-2 pt-10">
            <a href="{{ asset('kitchen-temp') }}">
                <div class="pt-2 rounded-md">
                    <div class="w-11/12 mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white border border-red-500 overflow-hidden shadow-xl sm:rounded-lg">
                            <div class="p-3 text-gray-900 text-center">
                                KITCHEN
                            </div>

                            <div class="flex items-center justify-center">
                                <div>
                                    <div class="p-1 text-xs font-bold text-BLACK text-center">
                                        Smoke Lvl:
                                    </div>
                                    <div class="underline p-1 text-xs font-bold text-center">
                                        <div id="text" class="p-2"></div>
                                    </div>
                                </div>

                                <div class="ml-4 border border-black rounded-full p-4">
                                    <div id="smoke"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            {{-- <div class="pt-2 rounded-md">
                <div class="w-11/12 mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white border border-red-500 overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-3 text-gray-900 text-center">
                            LIVING ROOM
                        </div>
                        <div class="flex items-center justify-center">
                            <div>
                                <div class="p-1 text-xs font-bold text-BLACK text-center">
                                    Smoke Lvl:
                                </div>
                                <div class="underline p-1 text-xs font-bold text-red-500 text-center">
                                    HIGH
                                </div>
                            </div>

                            <div>
                                <img name="img" src="{{ asset('storage/temp.png') }}" alt="img"
                                    class="h-[60px]">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-2 rounded-md">
                <div class="w-11/12 mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white border border-red-500 overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-3 text-gray-900 text-center">
                            TINE'S ROOM
                        </div>
                        <div class="flex items-center justify-center">
                            <div>
                                <div class="p-1 text-xs font-bold text-BLACK text-center">
                                    Smoke Lvl:
                                </div>
                                <div class="underline p-1 text-xs font-bold text-green-500 text-center">
                                    LOW
                                </div>
                            </div>

                            <div>
                                <img name="img" src="{{ asset('storage/temp.png') }}" alt="img"
                                    class="h-[60px]">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-2 rounded-md">
                <div class="w-11/12 mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white border border-red-500 overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-3 text-gray-900 text-center">
                            DINING ROOM
                        </div>
                        <div class="flex items-center justify-center">
                            <div>
                                <div class="p-1 text-xs font-bold text-BLACK text-center">
                                    Smoke Lvl:
                                </div>
                                <div class="underline p-1 text-xs font-bold text-orange-500 text-center">
                                    MEDIUM
                                </div>
                            </div>

                            <div>
                                <img name="img" src="{{ asset('storage/temp.png') }}" alt="img"
                                    class="h-[60px]">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-2 rounded-md">
                <div class="w-11/12 mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white border border-red-500 overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-3 text-gray-900 text-center">
                            BALCONY
                        </div>
                        <div class="flex items-center justify-center">
                            <div>
                                <div class="p-1 text-xs font-bold text-BLACK text-center">
                                    Smoke Lvl:
                                </div>
                                <div class="underline p-1 text-xs font-bold text-orange-500 text-center">
                                    MEDIUM
                                </div>
                            </div>

                            <div>
                                <img name="img" src="{{ asset('storage/temp.png') }}" alt="img"
                                    class="h-[60px]">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-2 rounded-md">
                <div class="w-11/12 mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white border border-red-500 overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-3 text-gray-900 text-center">
                            BED ROOM
                        </div>
                        <div class="flex items-center justify-center">
                            <div>
                                <div class="p-1 text-xs font-bold text-BLACK text-center">
                                    Smoke Lvl:
                                </div>
                                <div class="underline p-1 text-xs font-bold text-green-500 text-center">
                                    LOW
                                </div>
                            </div>

                            <div>
                                <img name="img" src="{{ asset('storage/temp.png') }}" alt="img"
                                    class="h-[60px]">
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>





    <script>
        function fetchSmokeValue() {
            $.get('/smoke-value', function(data) {
                $('#text').text(data.value);
                $('#smoke').text(data.smoke);
            });
        }

        // Update the value every 2 seconds
        setInterval(fetchSmokeValue, 2000);

        // Call the function initially to display the current value
        fetchSmokeValue();
    </script>

</x-app-layout>
