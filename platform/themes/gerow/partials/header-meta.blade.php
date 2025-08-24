<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        http-equiv="X-UA-Compatible"
        content="IE=edge"
    >
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
    />
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    {!! BaseHelper::googleFonts(
        'https://fonts.googleapis.com/css2?family=' .
            urlencode(theme_option('primary_font', 'Manrope')) .
            ':wght@200;300;400;500;600;700;800&display=swap',
    ) !!}
    <style>
        :root {
            --primary-color: {{ $primaryColor = theme_option('primary_color', '#0055FF') }};
            --primary-color-rgb: {{ implode(',', BaseHelper::hexToRgb($primaryColor)) }};
            --primary-hover-color: {{ theme_option('primary_hover_color', '#hover') }};
            --secondary-color: {{ $secondaryColor = theme_option('secondary_color', '#00194C') }};
            --secondary-color-rgb: {{ implode(',', BaseHelper::hexToRgb($secondaryColor)) }};
            --heading-color: {{ theme_option('heading_color', '#00194C') }};
            --text-color: {{ theme_option('text_color', '#334770') }};
            --heading-font: '{{ theme_option('heading-font', 'Plus Jakarta Sans') }}', sans-serif;
            --primary-font: '{{ theme_option('primary_font', 'Urbanist') }}', sans-serif;
        }
    </style>

    {!! Theme::header() !!}

    @if (theme_option('animation_enabled', 'yes') !== 'yes')
        <style>
            .img-reveal {
                visibility: visible;
            }
        </style>
    @endif
</head>

@php
    Theme::addBodyAttributes(['class' => 'body-header-' . Theme::get('headerStyle')]);
@endphp

<body {!! Theme::bodyAttributes() !!}>
