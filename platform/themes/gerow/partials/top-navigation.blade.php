@php
    $headerTopSideBarStyle = Theme::get('headerTopSideBarStyle') ?: 'style-1';
@endphp

@switch($headerTopSideBarStyle)
    @case('style-1')
        @if ($headerTopSidebarStyle1 = dynamic_sidebar('header_top_sidebar_style_1'))
            <div class="header-top-wrap">
                <div @class(['custom-container', 'container' => ! empty($container) || ! Theme::get('headerFixed', false)])>
                    <div class="row justify-content-between align-items-center g-0">
                        {!! $headerTopSidebarStyle1 !!}
                    </div>
                </div>
            </div>
        @endif
    @break

    @case('style-2')
        @if ($headerTopSidebarStyle2 = dynamic_sidebar('header_top_sidebar_style_2'))
            <div class="header-top-wrap header-top-style-2">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        {!! $headerTopSidebarStyle2 !!}
                    </div>
                </div>
            </div>
        @endif
    @break
@endswitch
