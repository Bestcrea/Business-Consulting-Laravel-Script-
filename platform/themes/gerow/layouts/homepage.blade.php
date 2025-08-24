@php
    Theme::set('headerFixed', true);
@endphp

{!! Theme::partial('header') !!}

<section class="section">
    {!! Theme::content() !!}
</section>

{!! Theme::partial('footer') !!}
