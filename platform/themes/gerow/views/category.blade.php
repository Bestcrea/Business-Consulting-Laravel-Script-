@php
    Theme::set('pageTitle', $category->name);
    Theme::set('headerStyle', theme_option('header_style', 'style-1'));
    Theme::set('headerTopStyle',theme_option('header_top_sidebar_style', 'style-1'));
@endphp

<section class="blog-area">
    <div class="container">
        <div class="inner-blog-wrap">
            <div class="row justify-content-center">
                <div class="col-71">
                    @include(Theme::getThemeNamespace('views.loop'))
                </div>

                <div class="col-29">
                    <aside class="sidebar-widget">
                        {!! dynamic_sidebar('blog_sidebar') !!}
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
