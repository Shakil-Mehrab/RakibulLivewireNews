<x-section>
    <x-slot name="title">
        {{ __('Task List') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Browse task list and modify if needed.') }}
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
                                    <x-jet-input type="checkbox" class="mt-3 mr-4" wire:model="selectAll" />
                                    <x-jet-input
                                        class="flex-grow h-10 px-2 border focus:outline-none focus:ring-0 focus:border-gray-300"
                                        placeholder="Search..." wire:model.debounce.300ms="query" />

                                </div>
                            </div>
                            {{-- <div>
                                <div class="flex items-center whitespace-nowrap">
                                    <select id="location" name="location"
                                        class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        wire:model="paginate" data-placeholder="Searcy By...">
                                        @foreach (collect([10, 20, 50, 100]) as $perPage)
                                            <option value="{{ $perPage }}">
                                                {{ $perPage }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                            <div>
                                <div class="flex items-center whitespace-nowrap">
                                    <div class="mx-2">Per Page</div>
                                    <select id="location" name="location"
                                        class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        wire:model="paginate">
                                        @foreach (collect([10, 20, 50, 100]) as $perPage)
                                            <option value="{{ $perPage }}">
                                                {{ $perPage }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div>
                            {{-- {{ json_encode($selectedTasks) }} --}}
                            {{-- @forelse ($this->tasks() as $task)
                                @livewire('task.task-list-item', ['task' => $task,'selectedTasks'=>$selectedTasks],
                                key($task->id))
                            @empty
                                <div class="py-2 text-center">No Task listed yet.</div>
                            @endforelse --}}
                        </div>
                    </div>
                </div>
                {{-- <div class="mt-2 pagination">{{ $this->tasks()->links() }}</div> --}}
            </div>
        </div>
    </x-slot>
</x-section>
