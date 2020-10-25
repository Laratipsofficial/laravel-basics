<button
    {{ $attributes->merge(['class' => 'py-2 focus:outline-none hover:bg-purple-200 transition transition-colors duration-300']) }}
>
    {{ $slot }}
</button>