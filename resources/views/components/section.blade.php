<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-12 md:gap-3']) }}>
    {{-- <x-jet-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-jet-section-title> --}}

    <div class="mt-5 md:mt-0 md:col-span-12">
        {{ $content }}
    </div>
</div>
