@props(['reverse' => false])
<section
    {{ $attributes->class(
        $reverse
            ? 'bg-gradient-to-r from-secondary-400/30 via-primary-200 to-primary-600/70'
            : 'bg-gradient-to-r from-primary-600/30 via-primary-200 to-secondary-400/70'
    )
    }}
    @if ($reverse)
{{--        style="background: linear-gradient(107.39deg, #FCC775 -2.3%, #E8D1D3 12.4%, #E1D8ED 47.87%, #BFBAF0 71.19%, #8B8BFE 95%);"--}}
    @else
{{--        style="background: linear-gradient(107.39deg, #8B8BFE -2.3%, #BFBAF0 12.4%, #E1D8ED 47.87%, #EFD4C9 71.19%, #FCC775 95%);"--}}
    @endif
>
    <div class="container mx-auto px-4">
        {{ $slot }}
    </div>
</section>
