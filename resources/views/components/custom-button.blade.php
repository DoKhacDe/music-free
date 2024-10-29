@props([
    'as' => 'button'
])

<{{ $as }} {{ $attributes->class("inline-flex items-center md:px-4 md:py-2 border border-transparent rounded-full
        justify-center transition-all bg-gradient-to-r md:text-base text-sm
        focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
        hover:bg-gradient-to-l") }}>
{{ $slot }}
</{{ $as }}>
