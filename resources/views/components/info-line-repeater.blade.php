@props(['data' => []])

<div class="px-4 py-3 bg-gray-100 rounded-lg flex flex-col divide-y">
    @foreach($data as $line)
        <x-info-line :label="$line['label']" :value="$line['value']" :class="$line['class'] ?? ''"/>
    @endforeach
</div>
