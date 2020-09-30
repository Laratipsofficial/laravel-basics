<div {{ $attributes->merge(['class' => 'flex items-center justify-between px-6 py-4 rounded ' . $typeClass()]) }}>
    <div>{{ $slot }}</div>
    <button>&times;</button>
</div>