<x-section>
    <x-slot name="title">
        {{ __('Type List') }}
    </x-slot>

    <x-slot name="description" class="pt-8">
        {{ __('Browse type list and modify if needed.') }}
    </x-slot>

    <x-slot name="content">
        <div class="flex flex-col">
            <div class="overflow-x-auto">
                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                    <div>
                        <div
                            class="flex flex-wrap items-center justify-between w-full p-4 bg-white border-t-2 border-b-2 border-gray-200 ">
                            <div class="w-full mr-2 sm:w-6/12">

                                <div class="flex mt-1 rounded-md">
                                    <x-jet-input type="checkbox" class="mt-3 mr-4" />
                                    <x-jet-input
                                        class="flex-grow px-2 border rounded-r-none focus:outline-none focus:ring-0 focus:border-gray-300"
                                        placeholder="Search..." wire:model.debounce.300ms="query" />
                                    <button type="button"
                                        class="relative inline-flex items-center px-4 py-2 -ml-px space-x-2 text-sm font-medium text-gray-500 border border-gray-300 rounded-r-md bg-gray-50 hover:bg-gray-100 focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform -rotate-90"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center whitespace-nowrap">
                                    <div class="mx-2">Per Page </div>
                                    <select id="location" name="location"
                                        class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option>10</option>
                                        <option selected>20</option>
                                        <option>50</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div>

                            {{-- @forelse ($this->types() as $type)
                                @livewire('type.type-list-item', ['type' => $type], key($type->id))
                            @empty
                                <div class="py-2 text-center">No Type listed yet.</div>
                            @endforelse --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-section>
