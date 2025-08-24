@php
    Theme::set('headerStyle', theme_option('header_style', 'style-1'));
    Theme::set('headerTopStyle',theme_option('header_top_sidebar_style', 'style-1'));
    Theme::set('headerFixed', theme_option('header_fixed', true));
    Theme::fireEventGlobalAssets();
@endphp

{!! Theme::partial('header') !!}
<main class="fix">
    <section class="error-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-content">
                        <h1 class="error-404">4<span>0</span>4</h1>
                        <h2 class="title">{{ __('OOPS! Page Not Found') }}</h2>
                        <p>
                            {{ __('Oops! it could be you or us, there is no page here') }} <br>
                            {{ __('It might have been moved or deleted.') }}
                        </p>
                        <a
                            class="btn btn-three btn-404"
                            href="{{ BaseHelper::getHomepageUrl() }}"
                        >
                            {{ __('Go Back To Home') }}
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

{!! Theme::partial('footer') !!}
