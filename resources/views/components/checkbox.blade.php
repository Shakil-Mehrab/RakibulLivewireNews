<label class="inline-flex items-center">
    <input type="checkbox" {{ $attributes->merge(['class' => 'rounded-md form-checkbox']) }}>
    <span class="ml-2">
        {{ $slot }}
    </span>
</label>
