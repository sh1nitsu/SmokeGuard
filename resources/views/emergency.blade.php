<x-app-layout>

    <a class="p-2 rounded-md" href="{{ asset('dashboard') }}">
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
                    Emergency Hotline Contacts
                </div>
            </div>
        </div>
    </div>

    <div class="pt-5">
        <a href="{{asset('emergency-call')}}">
            <div class="w-11/12 mx-auto sm:px-6 lg:px-8 ">
                <div class="p-3 bg-white border border-red-500 overflow-hidden shadow-sm rounded-lg">
                    <div class="text-gray-900 font-bold text-center">
                        {{ __('Bureau of Fire Protection') }}
                    </div>
                    <div class=" text-gray-900 font-bold text-sm text-center">
                        {{ __('911') }}
                    </div>
                </div>
            </div>
        </a>
        <div class="w-11/12 mx-auto sm:px-6 lg:px-8">
            <div class="p-3 bg-white border border-red-500 overflow-hidden shadow-sm rounded-lg mt-2">
                <div class="text-gray-900 font-bold text-center">
                    {{ __('Caloocan Emergency Hotline') }}
                </div>
                <div class=" text-gray-900 font-bold text-sm text-center">
                    {{ __('82360396') }}
                </div>
            </div>
        </div>
        <div class="w-11/12 mx-auto sm:px-6 lg:px-8">
            <div class="p-3 bg-white border border-red-500 overflow-hidden shadow-sm rounded-lg mt-2">
                <div class="text-gray-900 font-bold text-center">
                    {{ __('Barangay Number') }}
                </div>
                <div class=" text-gray-900 font-bold text-sm text-center">
                    {{ __('09738472832') }}
                </div>
            </div>
        </div>
        <div class="w-11/12 mx-auto sm:px-6 lg:px-8">
            <div class="p-3 bg-white border border-red-500 overflow-hidden shadow-sm rounded-lg mt-2">
                <div class="text-gray-900 font-bold text-center">
                    {{ __('Subdivision Number') }}
                </div>
                <div class=" text-gray-900 font-bold text-sm text-center">
                    {{ __('09568384792') }}
                </div>
            </div>
        </div>
        <div class="w-11/12 mx-auto sm:px-6 lg:px-8">
            <div class="p-3 bg-white border border-red-500 overflow-hidden shadow-sm rounded-lg mt-2">
                <div class="text-gray-900 font-bold text-center">
                    {{ __('Emergency Hotline') }}
                </div>
                <div class=" text-gray-900 font-bold text-sm text-center">
                    {{ __('161') }}
                </div>
            </div>
        </div>
    </div>







    {{-- <div class="py-8 rounded-md">
        <div class="w-11/12 mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-1 text-white">
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
            <div class="bg-red-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-14 text-white font-bold">
                    {{ __('There is no smoke detected.') }}
                </div>
            </div>
        </div>
    </div>


    <footer class="fixed bottom-0 bg-red-700 w-full shadow dark:bg-gray-800">
        <div class="w-full mx-auto max-w-screen-xl p-4   md:flex md:items-center md:justify-between">
            <ul class="flex justify-between items-center text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                <li>
                    <a href="#" class="hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="white" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>

                    </a>
                </li>
                <li>
                    <a href="#" class="hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="white" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="white" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:underline">
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

</x-app-layout>
