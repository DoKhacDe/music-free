@props(['text'])

<x-secondary-button x-data="{
    text: '{{ $text }}',
    flashText: '',
    copy() {
        navigator.clipboard.writeText(this.text);
        this.flashText = 'Copied!';
        setTimeout(() => {
            this.flashText = '';
        }, 1000);
    }
}"
        x-on:click.prevent="copy"
        {{ $attributes->class(['relative']) }}
    type="button">
    <span x-show="flashText" style="display: none" x-text="flashText" class="absolute top-0 left-0 w-full h-full rounded-md flex items-center justify-center text-gray-200 bg-gray-900 font-semibold transition-all"></span>
    {{ $slot }}
</x-secondary-button>
