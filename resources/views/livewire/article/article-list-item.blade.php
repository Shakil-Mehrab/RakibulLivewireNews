<div>
    <div class="justify-between p-4 bg-white border-t border-gray-200 sm:flex group">
        <div class="flex flex-wrap items-center justify-between w-full space-x-2">
            <div class="my-2">
                <x-jet-input type="checkbox" wire:model="selectedTasks" value="{{ $task->id }}" />
            </div>
            <div class="flex-grow w-full md:w-4/12">
                <h2 class="text-base font-semibold leading-none text-gray-700">
                    {{ $task->title }}
                </h2>

                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-4 h-4 mr-1 text-gray-500">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd" />
                    </svg>
                    <div class="text-sm text-gray-500">
                        {{ $task->user->name }}
                    </div>
                </div>
                <div class="flex items-center mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-4 h-4 mr-1 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="text-sm text-gray-500">
                        {{ $task->created_at->toDayDateTimeString() }}
                    </div>
                </div>
            </div>
            <div class="w-full mb-2 md:w-4/12">

                <a href="{{ $task->platform1 }}" target="_blank"
                    class="inline-block px-2 py-0 mt-1 mr-1 text-gray-600 bg-white border border-gray-300 rounded {{ $task->platform1 ? '' : 'hidden' }}">
                    Youtube
                </a>
                <a href="{{ $task->platform2 }}" target="_blank"
                    class="inline-block px-2 py-0 mt-1 mr-1 text-gray-600 bg-white border border-gray-300 rounded {{ $task->platform2 ? '' : 'hidden' }}">
                    Facebook
                </a>
                <a href="{{ $task->platform3 }}" target="_blank"
                    class="inline-block px-2 py-0 mt-1 mr-1 text-gray-600 bg-white border border-gray-300 rounded {{ $task->platform3 ? '' : 'hidden' }}">
                    Website
                </a>

            </div>

            <div class="my-2" style="margin-left:auto">
                <div class="transition-opacity duration-200 opacity-100 md:opacity-0 group-hover:opacity-100">
                    <div class="">
                        @if ($task->ownTask())
                            <x-jet-secondary-button wire:click.prevent="
                        $set('showingTaskEditModal', {{ $task->id }})">
                        {{ _('Edit') }}
                        </x-jet-secondary-button>
                        <x-jet-danger-button wire:click.prevent="
                                                    $set('showingTaskDeleteModal', {{ $task->id }})">
                            {{ _('Delete') }}
                        </x-jet-danger-button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-jet-dialog-modal wire:model="showingTaskEditModal">
        <x-slot name="title">
            {{ __('Edit Task') }}
        </x-slot>
        <x-slot name="content">

            <div class="mt-2">
                <x-input-box wire:model.lazy="state.title" label="Title"></x-input-box>
                <x-jet-input-error for="title"></x-jet-input-error>
            </div>
            <div class="mt-4">
                <x-input-box wire:model.lazy="state.platform1" label="Youtube URL"></x-input-box>
                <x-jet-input-error for="platform1"></x-jet-input-error>
            </div>
            <div class="mt-4">
                <x-input-box wire:model.lazy="state.platform2" label="Facebook URL"></x-input-box>
                <x-jet-input-error for="platform2"></x-jet-input-error>
            </div>
            <div class="mt-4">
                <x-input-box wire:model.lazy="state.platform3" label="Website URL"></x-input-box>
                <x-jet-input-error for="platform3"></x-jet-input-error>
                <x-jet-input-error for="platform"></x-jet-input-error>
            </div>
            {{-- remarks --}}
            <div class="col-span-8 mt-4">
                <x-jet-label for="remarks" value="{{ __('Remarks') }}" class="mb-2 font-semibold" />
                <x-text-box label="Remarks" wire:model.lazy="state.remarks" />
                <x-jet-input-error for="remarks" class="mt-2" />
            </div>

            <!-- Tags -->
            <div class="mt-2">
                <x-jet-label for="tags" value="{{ __('Tags') }}" class="mb-2 font-semibold" />
                <x-select-tag multiple placeholder="Select Tags" class="w-full" wire:model='state.tags'>
                    @forelse ($tags as $key => $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @empty
                        <div>No Tag Found</div>
                    @endforelse
                </x-select-tag>
                <x-jet-input-error for="tags" class="mt-2" />
            </div>
            {{-- type --}}
            <div class="col-span-8">
                <x-jet-label for="type" value="{{ __('Task Type') }}" class="mt-2 font-semibold" />
                <div class="flex space-x-2">
                    @forelse ($types as $type)
                        <x-checkbox wire:model="state.types.{{ $type->name }}" value="{{ $type->id }}">
                            {{ $type->name }}
                        </x-checkbox>
                    @empty
                        <div class="text-xs text-red-500">No Type Found</div>
                    @endforelse
                </div>
                <x-jet-input-error for="types" class="mt-2" />
            </div>

            <!-- Area -->
            <div class="col-span-8">
                <x-jet-label for="area" value="{{ __('Area') }}" class="mb-2 font-semibold" />
                <x-select-area data-placeholder="Select Area" wire:model='state.area'>
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
                <x-jet-input-error for="area" class="mt-2" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('showingTaskEditModal', null)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-2" wire:click="updateTask" wire:loading.attr="disabled">
                {{ __('Update') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
    <x-jet-dialog-modal wire:model="showingTaskDeleteModal">
        <x-slot name="title">
            {{ __('Delete Task') }}
        </x-slot>
        <x-slot name="content">
            Are you sure to delete
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('showingTaskDeleteModal', null)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>
            <x-jet-danger-button class="ml-2" wire:click="deleteTask" wire:loading.attr="disabled">
                {{ __('Delete') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
