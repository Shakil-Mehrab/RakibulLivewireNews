@props(['label', 'for', 'rows', 'disabled' => false])

@php
$for = $for ?? strtolower($label);
$rows = $rows ?? 3;
@endphp

<div class="relative">
    <textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'w-full text-gray-900
     border-b border-gray-300 peer focus:outline-none focus:border-gray-600 rounded-md',
]) !!} placeholder="{{ $label }}"
        id="{{ $for }}" name="{{ $for }}" rows="{{ $rows }}"></textarea>
</div>
{{-- <textarea name="hi" id="" cols="30" rows="10"></textarea> --}}
