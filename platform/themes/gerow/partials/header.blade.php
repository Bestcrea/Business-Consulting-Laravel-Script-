{!! Theme::partial('header-meta') !!}

{!! apply_filters(THEME_FRONT_BODY, null) !!}

<div @class(['no-fixed' => ! Theme::get('headerFixed', false)])>
    {!! Theme::partial('header-top') !!}
</div>
