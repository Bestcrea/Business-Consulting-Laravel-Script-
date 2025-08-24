@php
    $style = in_array($shortcode->style, [
        'style-1',
        'style-2',
        'style-3',
        'style-4',
        'style-5',
        'style-6',
        'style-7',
        'style-8',
    ]) ? $shortcode->style : 'style-1';
@endphp

{!! Theme::partial('shortcodes.about-us-information.styles.' . $style, compact('shortcode', 'tabs')) !!}
