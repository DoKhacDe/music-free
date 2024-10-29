@props(['date'])

@if (!blank($date))
    <span>{{ is_string($date) ? \Illuminate\Support\Carbon::parse($date)->format('d/m/Y') : $date->format('d/m/Y') }}</span>
@endif
