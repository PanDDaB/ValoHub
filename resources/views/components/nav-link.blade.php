@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center font-black px-1 pt-1 border-b-2 border-rougeValo text-sm font-medium leading-5 text-rougeValo focus:outline-none focus:border-rougeValo transition duration-150 ease-in-out'
            : 'inline-flex items-center font-black px-1 pt-1 border-b-2 border-gray-800 text-sm font-medium leading-5 text-white hover:text-rougeValo hover:border-rougeValo focus:outline-none focus:text-white focus:border-none transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
