@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 border-l-4 border-blue-600 text-base font-medium leading-5 text-gray-900 bg-slate-100 focus:outline-none focus:border-blue-800 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 border-l-4 border-transparent text-base font-medium leading-5 text-gray-900 hover:bg-slate-100 focus:outline-none focus:text-gray-900 focus:border-gray-400 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
