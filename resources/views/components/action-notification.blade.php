@props(['on'])

<div x-data="{ shown: false, timeout: null }"
     x-init="@this.on('{{ $on }}', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000); })"
     x-show.transition.out.opacity.duration.1500ms="shown"
     x-transition:leave.opacity.duration.1500ms
     style="display: none;"
    {{ $attributes->merge(['class' => 'text-sm bg-[#f3f4f6] drop-shadow-md p-3 absolute top-10 right-5 rounded-lg']) }}>
    {{ $slot->isEmpty() ? 'Saved.' : $slot }}
</div>
