<div>
    <x-jet-secondary-button class="mt-1 mr-1" wire:click.prevent="$set('showingTagEditModal', {{ $tag->id }})">
        {{ _($tag->name) }}
    </x-jet-secondary-button>
    <x-jet-dialog-modal wire:model="showingTagEditModal">
        <x-slot name="title">
            {{ __('Edit Tag') }}
        </x-slot>

        <x-slot name="content">
            <div class="mt-2">
                <x-input-box wire:model.lazy="state.name" label="Name"></x-input-box>
                <x-jet-input-error for="name"></x-jet-input-error>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('showingTagEditModal', null)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-2" wire:click="updateTag" wire:loading.attr="disabled">
                {{ __('Save') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
