@props(['as' => 'button'])

<{{ $as }}
    {{ $attributes->merge([
        'type' => 'submit',
        'class' => 'inline-flex items-center px-4 py-2 border border-transparent rounded-full font-semibold text-white
            transition-all bg-gradient-to-r from-primary-500 to-primary-700/70
            active:bg-primary-700 md:text-base text-sm
            focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
            disabled:opacity-70 disabled:cursor-not-allowed
            '
    ]) }}>
    {{ $slot }}
</{{ $as }}>
