@php
    $headerStyle = Theme::get('headerStyle') ?: 'style-1';
@endphp

@switch($headerStyle)
    @case('style-1')
        <header
            class="transparent-header header-style-two"
            id="sticky-header"
        >
            <div @class(['container custom-container' => Theme::get('headerFixed', false)])>
                {!! Theme::partial('top-navigation') !!}

                <div
                    class="menu-area"
                    id="sticky-header"
                >
                    <div class="container">
                        <div class="row">
                            <div class="col-12 custom-header p-0">
                                <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                                @if ($headerStyle1 = dynamic_sidebar('header_style_1'))
                                    <nav class="menu-nav">
                                        {!! $headerStyle1 !!}
                                    </nav>
                                @endif
                            </div>

                            {!! Theme::partial('mobile-menu') !!}
                        </div>
                    </div>
                </div>
            </div>

            {!! Theme::partial('header-additional') !!}
        </header>
    @break

    @case('style-2')
        <header
            class="transparent-header header-style-three header-top-sidebar-style-2"
            id="sticky-header"
        >
            <div class="menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 custom-header">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            @if ($headerStyle2 = dynamic_sidebar('header_style_2'))
                                <div class="menu-wrap">
                                    <nav class="menu-nav">
                                        {!! $headerStyle2 !!}
                                    </nav>
                                </div>
                            @endif

                            {!! Theme::partial('mobile-menu') !!}
                        </div>
                    </div>
                </div>
            </div>

            {!! Theme::partial('header-additional') !!}
        </header>
    @break

    @case('style-3')
        <div id="header-fixed-height"></div>
        <header class="header-style-four">
            @if (theme_option('header_top_enabled', true))
                {!! Theme::partial('top-navigation', ['container' => true]) !!}
            @endif
            <div
                class="menu-area"
                id="sticky-header"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-12 custom-header">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            @if ($headerStyle3 = dynamic_sidebar('header_style_3'))
                                <nav class="menu-nav">
                                    {!! $headerStyle3 !!}
                                </nav>
                            @endif

                            {!! Theme::partial('mobile-menu') !!}
                        </div>
                    </div>
                </div>
            </div>

            {!! Theme::partial('header-additional') !!}
        </header>
    @break

    @default
        <div id="header-fixed-height"></div>
        <header class="header-style-four">
            @if (theme_option('header_top_enabled', true))
                {!! Theme::partial('top-navigation') !!}
            @endif
            <div
                class="menu-area"
                id="sticky-header"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            @if ($headerStyle3 = dynamic_sidebar('header_style_3'))
                                <nav class="menu-nav">
                                    {!! $headerStyle3 !!}
                                </nav>
                            @endif

                            {!! Theme::partial('mobile-menu') !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu-backdrop"></div>
            {!! Theme::partial('header-additional') !!}
        </header>
    @break

@endswitch
