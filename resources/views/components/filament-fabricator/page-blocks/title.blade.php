@props([
    'title',
    'subtitle',
])
<div {{ $attributes->class("px-4 py-4 md:py-8") }}>
    <div class="max-w-7xl mx-auto">
        <h1> {{ $title }} </h1>
        <h3> {{ $subtitle }} </h3>
    </div>
</div>

<x-curator-curation :media="1" curation="JustXico" loading="lazy" />

<x-curator-curation :media="1" curation="" loading="lazy" />

