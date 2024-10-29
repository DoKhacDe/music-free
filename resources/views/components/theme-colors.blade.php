@php
    $primaryColor = tenant()?->primary_color ?: config('insurlink.primary_color');
    $secondaryColor = tenant()?->secondary_color ?: config('insurlink.secondary_color');
@endphp
<style>
    :root {
        @foreach(\Filament\Support\Colors\Color::hex($primaryColor) as $name => $value)
--color-primary-{{ $name }}: {{ str_replace(',', '', $value) }};
        @endforeach

        @foreach(\Filament\Support\Colors\Color::hex($secondaryColor) as $name => $value)
--color-secondary-{{ $name }}: {{ str_replace(',', '', $value) }};
    @endforeach
}
</style>
