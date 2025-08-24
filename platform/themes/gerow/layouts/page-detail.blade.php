@php
    Theme::set('headerFixed', theme_option('header_fixed', true));
@endphp

{!! Theme::partial('header') !!}

{!! Theme::partial('breadcrumbs') !!}

<section class="section">
    {!! Theme::content() !!}
</section>

{!! Theme::partial('footer') !!}
