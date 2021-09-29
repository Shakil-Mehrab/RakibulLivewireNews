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
                        <div>
                            <div class="w-full mr-2 ">
                                {{-- sm:w-6/12 --}}
                                <div class="w-full mb-1 rounded-md">
                                    <x-jet-input
                                        class="flex-grow w-full h-10 px-2 border focus:outline-none focus:ring-0 focus:border-gray-300"
                                        placeholder="Search..." wire:model.debounce.300ms="query" />

                                </div>
                            </div>
                            <div class="justify-between p-4 bg-white border-t border-gray-200 sm:flex group">
                                <div class="flex flex-wrap items-center w-full">
                                    @forelse ($this->tags() as $tag)
                                        @livewire('tag.tag-list-item', ['tag' => $tag], key($tag->id))
                                    @empty
                                        <div class="py-2 text-center">No Tag listed yet.</div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-section>
