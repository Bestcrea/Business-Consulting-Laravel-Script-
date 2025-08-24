@php
    $headerTopSideBarStyle = Theme::get('headerTopSideBarStyle') ?: 'style-1';
@endphp

@if (Str::startsWith($sidebar, 'header_top_sidebar'))
    <div
        @class(['ps-5',
            'col-lg-5' => Theme::get('headerTopSideBarStyle') === 'style-2',
            'col-lg-2' => Theme::get('headerTopSideBarStyle') !== 'style-2'
         ])
    >
        <div class="header-top-right">
            @if ($content = Arr::get($config, 'content'))
                <div class="header-contact">
                    <a href="">
                        <i class="{{ Arr::get($config, 'icon') }}"></i>
                        <span dir="ltr">{{ $content }}</span>
                    </a>
                </div>
            @endif
            <div class="header-social">
                <ul class="list-wrap">
                    @include(Theme::getThemeNamespace('widgets.social-links.templates.partials.social-links'))
                </ul>
            </div>
        </div>
    </div>
@elseif (Str::startsWith($sidebar, 'footer_bottom'))
    <div class="col-md-6">
        <div class="footer-social">
            <ul class="list-wrap">
                @include(Theme::getThemeNamespace('widgets.social-links.templates.partials.social-links'))
            </ul>
        </div>
    </div>

@else
    <ul class="list-wrap">
        @include(Theme::getThemeNamespace('widgets.social-links.templates.partials.social-links'))
    </ul>
@endif
