@props(['type' => 'info'])

<div {{ $attributes->class([
    "p-4 text-sm",
    "bg-green-100 text-green-800" => $type === "success",
    "bg-blue-100 text-blue-800" => $type === "info",
    "bg-yellow-100 text-yellow-800" => $type === "warning",
]) }}>
    {{ $slot }}
</div>
