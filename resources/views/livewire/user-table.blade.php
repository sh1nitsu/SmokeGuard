<!-- component -->
<div class="flex items-center justify-center bg-white">
    <div class="p-6 overflow-scroll px-0">
        <table class="w-full min-w-max table-auto text-left">
            <thead>
                <tr>
                    <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                        <p
                            class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                            Names</p>
                    </th>
                    <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                        <p
                            class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                            Email</p>
                    </th>
                    <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                        <p
                            class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                            Contact(s)</p>
                    </th>
                    <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                        <p
                            class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                        </p>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $user)
                    <tr wire:key="{{ $user->id }}">
                        <td class="p-4 border-b border-blue-gray-50">
                            <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                {{ $user->name }}</p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                {{ $user->email }}</p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p
                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                {{$user->contacts_count}}
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <button
                                class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20"
                                type="button">
                                <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true" class="h-4 w-4">
                                        <path
                                            d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                                        </path>
                                    </svg>
                                </span>
                            </button>
                        </td>
                    </tr>
                @empty
                <td class="p-4 border-b border-blue-gray-50">
                    <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                        No Registered Users.</p>
                </td>
                @endforelse
            </tbody>
        </table>
        <div class="w-full pt-5 px-4 mb-8 mx-auto ">
            <div class="text-sm text-gray-700 py-1">
                Made by Group 8. Doctolero, Corona, Nerja & Fabro
            </div>
        </div>
    </div>

</div>
