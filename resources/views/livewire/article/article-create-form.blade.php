<x-form-section submit="createTask">
    {{-- <x-slot name="title">
        {{ __('Create New Task') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Always ensure correct fields and links before save.') }}
    </x-slot> --}}

    <x-slot name="form">
        <div class="col-span-8">
            <x-input-box label="Title" wire:model.lazy="state.title" />
            <x-jet-input-error for="title" class="mt-2" />
        </div>
        {{-- <div class="col-span-8">
            <x-input-box label="Facebook Url" wire:model.lazy="state.platforms.1" />
            <x-jet-input-error for="platforms.1" class="mt-2" />
        </div>
        <div class="col-span-8">
            <x-input-box label="Youtube Url" wire:model.lazy="state.platforms.2" />
            <x-jet-input-error for="platforms.2" class="mt-2" />
        </div>
        <div class="col-span-8">
            <x-input-box label="Website Url" wire:model.lazy="state.platforms.3" />
            <x-jet-input-error for="platforms.3" class="mt-2" />
            <x-jet-input-error for="platforms" class="mt-2" />

        </div> --}}
        <div class="col-span-8">
            <x-jet-label for="body" value="{{ __('Body') }}" class="mb-2 font-semibold" />
            <x-text-box label="Body" wire:model.lazy="state.body" />
            <x-jet-input-error for="body" class="mt-2" />
        </div>


        <!-- Tags -->
        <div class="col-span-8">
            <x-jet-label for="tags" value="{{ __('Tags') }}" class="mb-2 font-semibold" />
            <x-select-tag multiple data-placeholder="Select tags" wire:model='state.tags'>
                @forelse ($tags as $key => $tag)
                    <option value="{{ $tag->id }}">
                        {{ $tag->name }}</option>
                @empty
                    <div>No Tag Found</div>
                @endforelse

            </x-select-tag>
            <x-jet-input-error for="tags" class="mt-2" />
        </div>
        <!-- Types -->
        <div class="col-span-8">
            <x-jet-label for="type" value="{{ __('Task Type') }}" class="mb-2 font-semibold" />
            <div class="flex mt-2 space-x-2">
                @forelse ($types as $type)
                    <x-checkbox wire:model.lazy="state.types.{{ $type->id }}" value="{{ $type->id }}">
                        {{ $type->name }}
                    </x-checkbox>
                @empty
                    <div>No Type Found</div>
                @endforelse
            </div>
            <x-jet-input-error for="types" class="mt-2" />
        </div>
        <!-- Area -->
        <div class="col-span-8">
            <x-jet-label for="areas" value="{{ __('Area') }}" class="mb-2 font-semibold" />
            <x-select-area data-placeholder="Select Area" wire:model='state.areas'>
                <option value="">Select One</option>
                @forelse ($areas as $area)
                    <option value="{{ $area->id }}">
                        {{ $area->eng_name }} ( {{ $area->parent->name ?? '' }} )

                        {{-- (<small>
                            {{ $area->ancestors->count() ? implode(' > ', $area->ancestors->pluck('eng_name')->toArray()) : 'Top Level' }}
                        </small>
                        <br>
                        {{ $area->eng_name }} ) --}}

                    </option>
                @empty
                    <div>No Area Found</div>
                @endforelse

            </x-select-area>
            <x-jet-input-error for="areas" class="mt-2" />
        </div>


        {{-- <div class="col-span-8">
            <label id="listbox-label" class="block text-sm font-medium text-gray-700">
                Assigned to
            </label>
            <div class="relative mt-1" x-data="{ isVisible: false }" @click.away="isVisible = false">
                <button type="button"
                    class="relative w-full py-2 pl-3 pr-10 text-left bg-white border border-gray-300 rounded-md shadow-sm cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label"
                    @click.prevent="isVisible=true">
                    <span class="block truncate">
                        Tom Cook
                    </span>
                    <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>
                <x-jet-input type="text" class="block w-full mt-1" placeholder="Search"
                    wire:model.debounce.300ms="query" @focus="isVisible = true"
                    x-show.transition.opacity.duration.700="isVisible" />
                @if (strlen($query) > 0)
                    <div x-show.transition.opacity.duration.700="isVisible">
                        <ul class="absolute z-10 w-full py-1 mt-1 overflow-auto text-base bg-white rounded-md shadow-lg max-h-60 ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                            tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                            aria-activedescendant="listbox-option-3">
                            @forelse ( $this->getAreas() as $area)
                                <li class="relative py-2 pl-3 text-gray-900 cursor-default select-none pr-9"
                                    id="listbox-option-0" role="option">
                                    <span class="block font-normal truncate">
                                        {{ $area->name }}
                                    </span>


                                    <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </li>
                            @empty

                            @endforelse


                        </ul>
                    </div>
                @endif
            </div>
        </div> --}}
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3 text-green-600" on="saved">
            {{ __('Task Added Successfully.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-form-section>
