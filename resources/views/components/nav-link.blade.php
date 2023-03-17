@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-3 pt-1 border-b-2 border-indigo-400 dark:border-indigo-600 text-sm font-bold leading-5 text-[#0F7874] dark:text-gray-100 focus:outline-none focus:border-red-500 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-3 pt-1 border-b-2 border-transparent text-sm font-bold leading-5 text-[#0F7874] dark:text-gray-400 hover:text-red-500 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-red-500 dark:focus:text-red-500 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
