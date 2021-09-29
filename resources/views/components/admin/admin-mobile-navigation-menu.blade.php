<div x-show="open" class="fixed inset-0 z-40 flex lg:hidden"
    x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog"
    aria-modal="true">

    <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state."
        class="fixed inset-0 bg-gray-600 bg-opacity-75" @click="open = false" aria-hidden="true">
    </div>

    <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
        x-description="Off-canvas menu, show/hide based on off-canvas menu state."
        class="relative flex flex-col flex-1 w-full max-w-xs bg-white focus:outline-none">

        <div x-show="open" x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-300"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            x-description="Close button, show/hide based on off-canvas menu state."
            class="absolute top-0 right-0 pt-2 -mr-12">
            <button type="button"
                class="flex items-center justify-center w-10 h-10 ml-1 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                @click="open = false">
                <span class="sr-only">Close sidebar</span>
                <svg class="w-6 h-6 text-white" x-description="Heroicon name: outline/x"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>

        <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
            <div class="flex items-center flex-shrink-0 px-4">
                <a href="{{ route('admin.index') }}">
                    <x-jet-application-mark class="block w-auto h-9" />
                </a>
            </div>
            <nav aria-label="Sidebar" class="mt-5">
                <div class="px-2 space-y-1">

                    <a href="{{ route('admin.index') }}"
                        class="flex items-center px-2 py-2 text-base font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group"
                        x-state:on="Current" x-state:off="Default"
                        x-state-description="Current: &quot;bg-gray-100 text-gray-900&quot;, Default: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                        <svg class="w-6 h-6 mr-4 text-gray-400 group-hover:text-gray-500" x-state:on="Current"
                            x-state:off="Default"
                            x-state-description="Current: &quot;text-gray-500&quot;, Default: &quot;text-gray-400 group-hover:text-gray-500&quot;"
                            x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                        Admin Dashboard
                    </a>
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center px-2 py-2 text-base font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group"
                        x-state:on="Current" x-state:off="Default"
                        x-state-description="Current: &quot;bg-gray-100 text-gray-900&quot;, Default: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                        <svg class="w-6 h-6 mr-4 text-gray-400 group-hover:text-gray-500" x-state:on="Current"
                            x-state:off="Default"
                            x-state-description="Current: &quot;text-gray-500&quot;, Default: &quot;text-gray-400 group-hover:text-gray-500&quot;"
                            x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                        Editor Dashboard
                    </a>
                    <a href="{{ route('users.index') }}"
                        class="flex items-center px-2 py-2 text-base font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group"
                        x-state:on="Current" x-state:off="Default"
                        x-state-description="Current: &quot;bg-gray-100 text-gray-900&quot;, Default: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                        <svg class="w-6 h-6 mr-4 text-gray-400 group-hover:text-gray-500" x-state:on="Current"
                            x-state:off="Default"
                            x-state-description="Current: &quot;text-gray-500&quot;, Default: &quot;text-gray-400 group-hover:text-gray-500&quot;"
                            x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                        Users
                    </a>


                </div>
                <hr class="my-5 border-t border-gray-200" aria-hidden="true">
                {{-- <div class="px-2 space-y-1">

                    <a href="#"
                        class="flex items-center px-2 py-2 text-base font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                        <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-400 group-hover:text-gray-500"
                            x-description="Heroicon name: outline/view-grid-add" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                            </path>
                        </svg>
                        Apps
                    </a>

                    <a href="#"
                        class="flex items-center px-2 py-2 text-base font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                        <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-400 group-hover:text-gray-500"
                            x-description="Heroicon name: outline/cog" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Settings
                    </a>

                </div> --}}
            </nav>
        </div>
        {{-- <div class="flex flex-shrink-0 p-4 border-t border-gray-200">
            <a href="#" class="flex-shrink-0 block group">
                <div class="flex items-center">
                    <div>
                        <img class="inline-block w-10 h-10 rounded-full"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                            alt="">
                    </div>
                    <div class="ml-3">
                        <p class="text-base font-medium text-gray-700 group-hover:text-gray-900">
                            Tom Cook
                        </p>
                        <p class="text-sm font-medium text-gray-500 group-hover:text-gray-700">
                            View profile
                        </p>
                    </div>
                </div>
            </a>
        </div> --}}
    </div>

    <div class="flex-shrink-0 w-14" aria-hidden="true">
        <!-- Force sidebar to shrink to fit close icon -->
    </div>
</div>
