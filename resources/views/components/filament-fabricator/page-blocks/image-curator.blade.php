@props([
    'image'
])
<div {{ $attributes->class("px-4 py-4 md:py-8") }}>
    <div class="max-w-7xl mx-auto">
{{--        <x-curator-curation :media="$image->id" curation="" loading="lazy" />--}}
        <img src="{{ $image->url }}" />
    </div>
</div>
