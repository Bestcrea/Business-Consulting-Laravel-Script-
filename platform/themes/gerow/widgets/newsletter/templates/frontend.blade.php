<div class="col-lg-4 col-md-7">
    <div class="footer-widget">
        @if ($name = Arr::get($config, 'name'))
            <h3 class="fw-title">{!! BaseHelper::clean($name) !!}</h3>
        @endif
        <div class="footer-newsletter">
            @if ($description = Arr::get($config, 'description'))
                <p>{!! BaseHelper::clean($description) !!}</p>
            @endif

            @if (is_plugin_active('newsletter'))
                {!! $form->renderForm() !!}
            @endif

            @if ($description = Arr::get($config, 'with_social_links', 'yes') == 'yes' && theme_option('social_links'))
                <div class="footer-social footer-social-two">
                    <ul class="list-wrap">
                        @include(Theme::getThemeNamespace('widgets.social-links.templates.partials.social-links'))
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>
