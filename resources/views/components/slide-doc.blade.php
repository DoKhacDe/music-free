@props(['trigger', 'file'])


<div x-data x-on:click="$dispatch('open-modal', {id: '{{ $file }}'})">
    {!! $trigger ?? 'trigger' !!}
</div>

@push('modals')
<x-filament::modal slide-over id="{{ $file }}" width="4xl">
    <article class="prose text-sm">
        {!! \Illuminate\Support\Str::markdown(file_get_contents(resource_path('/docs/' . $file))) !!}
    </article>
</x-filament::modal>
@endpush
