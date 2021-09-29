@props(['label', 'for', 'disabled' => false])

@php
$for = $for ?? strtolower($label);
@endphp

<div class="relative">
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'w-full h-10 text-gray-900
    placeholder-transparent border-b border-gray-300 peer focus:outline-none focus:border-rose-600',
]) !!} placeholder="{{ $label }}"
        id="{{ $for }}" name="{{ $for }}" />
    <label for="{{ $for }}"
        class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">{{ $label }}</label>
</div>
