@php
    $style = in_array($shortcode->style, ['style-1', 'style-2', 'style-3', 'style-4']) ? $shortcode->style : 'style-1';
@endphp

{!! Theme::partial('shortcodes.site-statistics.styles.' . $style, compact('shortcode', 'tabs')) !!}
