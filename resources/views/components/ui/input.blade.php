@php
$errorName = Str::contains($name, '[') ? str_replace(['[', ']'], ['.', ''], $name) : $name;
@endphp

<div {{ $attributes }}>
    <label class="block text-gray-700">{{ $label }}</label>
    <input type="{{ $type ?? 'text' }}"
           name="{{ $name }}"
           value="{{ old($errorName) }}"
           class="mt-2 p-2 w-full border border-gray-500 focus:outline-none focus:border-purple-700 rounded">

    @error($errorName)
    <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror
</div>