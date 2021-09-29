@props([
    'multiple' => false,
])

<select {{ $multiple ? 'multiple' : '' }}
    {{ $attributes->merge([
    'class' => 'rounded-md focus:outline-none border-gray-300 focus:border-indigo-300
    focus:ring focus:ring-indigo-200 focus:ring-opacity-50 shadow-sm',
]) }}>
    {{ $slot }}
</select>
