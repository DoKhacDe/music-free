<div {{ $attributes->class("flex items-center justify-between text-sm py-1.5") }}>
    <div class="text-gray-500">{{ $label }}</div>
    <div class="font-medium">{!! is_callable($value) ? $value() : $value ?? '' !!}</div>
</div>
