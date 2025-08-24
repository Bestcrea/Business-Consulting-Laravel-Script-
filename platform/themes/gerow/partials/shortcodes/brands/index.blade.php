@php
    $style = in_array($shortcode->style, ['style-1', 'style-2', 'style-3']) ? $shortcode->style : 'style-1';
@endphp

{!! Theme::partial('shortcodes.brands.styles.' . $style, compact('shortcode', 'tabs')) !!}
