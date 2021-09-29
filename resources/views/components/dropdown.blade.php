<div>
    <label id="listbox-label" class="block text-sm font-medium text-gray-700">
        Assigned to
    </label>
    <div class="relative mt-1" x-data="{ open: false }">
        <button type="button"
            class="relative w-full py-2 pl-3 pr-10 text-left bg-white border border-gray-300 rounded-md shadow-sm cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
            aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label" @click="open = ! open">
            <span class="block truncate">
                Wade Cooper
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

        <ul class="absolute z-10 w-full py-1 mt-1 overflow-auto text-base bg-white rounded-md shadow-lg max-h-60 ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
            tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3"
            x-show="open">
            <li class="relative py-2 pl-3 text-gray-900 cursor-default select-none pr-9" id="listbox-option-0"
                role="option">
                <x-input-box label="Search..." wire:model="state.title"></x-input-box>

            </li>
            <li class="relative py-2 pl-3 text-gray-900 cursor-default select-none pr-9" id="listbox-option-0"
                role="option">
                <span class="block font-normal truncate">
                    Wade Cooper
                </span>
                <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </li>
            <li class="relative py-2 pl-3 text-gray-900 cursor-default select-none pr-9" id="listbox-option-0"
                role="option">
                <span class="block font-normal truncate">
                    Hi
                </span>
            </li>
            <li class="relative py-2 pl-3 text-gray-900 cursor-default select-none pr-9" id="listbox-option-0"
                role="option">
                <span class="block font-normal truncate">
                    Bye
                </span>
            </li>

        </ul>
    </div>
</div>
