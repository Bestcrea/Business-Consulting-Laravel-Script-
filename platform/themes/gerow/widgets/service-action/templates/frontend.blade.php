@php
    $icon = Arr::get($config, 'icon');
    $link = Arr::get($config, 'link');
    $bgColor = Arr::get($config, 'background_color');
    $buttonColor = Arr::get($config, 'button_color');
@endphp
<div class="services-widget services-sidebar-contact" style="background-color: {{ $bgColor }}">
    @if ($title = Arr::get($config, 'title'))
        <h4 class="title">{{ $title }}</h4>
    @endif

    @if ($label = Arr::get($config, 'label'))
        <a href="{{ $link }}" style="background-color: {{ $buttonColor }}">
            <i class="{{ $icon }}"></i>
            {{ $label }}
        </a>
    @endif
</div>
