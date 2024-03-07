<x-app-layout>
    

    <a class="p-2 rounded-md" href="{{ asset('temperature') }}">
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
                    KITCHEN TEMPERATURE
                </div>
            </div>
        </div>
    </div>
    <div class="grid gap-5 grid-cols-2">
        <div class="flex items-center justify-center mt-10">
            <x-primary-button class="w-11/12 py-3 flex justify-center">
                <a href="{{asset('kitchen-temp')}}">{{ __('Temperature') }}</a>
            </x-primary-button>
        </div>
        <div class="flex items-center justify-center mt-10">
            <x-primary-button class="w-11/12 py-3 flex justify-center">
                <a href="{{asset('kitchen-smoke')}}">{{ __('Smoke') }}</a>
            </x-primary-button>
        </div>
    </div>

    <div class="p-10 flex items-center justify-center">
        <img name="img" src="{{ asset('storage/temp.png') }}" alt="img" class="h-[200px]" >
        </div> 

</x-app-layout>
