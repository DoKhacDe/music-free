<div class="flex items-center justify-between">
    <div class="text-sm">{{ $label }}</div>
    @if (is_string($value))
        <div class="font-medium">{!! $value !!}</div>
    @elseif (is_callable($value))
        <div class="font-medium">{!! $value() !!}</div>
    @else
        <div class="font-medium">{!! $value ?? '' !!}</div>
    @endif
</div>
