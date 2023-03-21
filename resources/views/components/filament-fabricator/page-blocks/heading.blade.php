@props([
    'heading',
    'tocHash',
    'heading_type'
])
<div {{ $attributes->class("px-4 py-4 md:py-8") }}>
    <div class="max-w-7xl mx-auto">
        <a href="#{{ $tocHash }}">
            @switch($heading_type)
                @case('h2')
                    <h2>{{ $heading }}</h2>
                    @break
                @case('h3')
                    <h3>{{ $heading }}</h3>
                    @break
                @case('h4')
                    <h4>{{ $heading }}</h4>
                    @break
            @endswitch
        </a>
    </div>
</div>
