<div class="col-lg-4 col-md-7">
    <div class="footer-widget">
        @if ($logoImage = Arr::get($config, 'logo'))
            <div class="fw-logo">
                <a href="{{ BaseHelper::getHomepageUrl() }}">
                    {{ Theme::getLogoImage(logoUrl: $logoImage) }}
                </a>
            </div>
        @elseif ($title = Arr::get($config, 'title'))
            <h3 class="fw-title">{!! BaseHelper::clean($title) !!}</h3>
        @endif

        <div class="footer-content">
            @if ($description = Arr::get($config, 'description'))
                <p>{!! BaseHelper::clean($description) !!}</p>
            @endif
            <p></p>
            <div class="footer-info">
                <ul class="list-wrap">
                    @if ($address = Arr::get($config, 'address'))
                        <li>
                            <div class="icon">
                                <i class="flaticon-pin"></i>
                            </div>
                            <div class="content">
                                <p>{!! BaseHelper::clean($address) !!}</p>
                            </div>
                        </li>
                    @endif

                    @if ($hotline = Arr::get($config, 'hotline'))
                        <li>
                            <div class="icon">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <div class="content">
                                <a href="tel:{{ $hotline }}" dir="ltr">{{ $hotline }}</a>
                            </div>
                        </li>
                    @endif

                    @if ($openingHours = Arr::get($config, 'opening_hours'))
                        <li>
                            <div class="icon">
                                <i class="flaticon-clock"></i>
                            </div>
                            <div class="content">
                                <p>{!! BaseHelper::clean(nl2br($openingHours)) !!}</p>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </div>

        @if ($description = Arr::get($config, 'with_social_links', 'no') == 'yes' && theme_option('social_links'))
            <div class="footer-social footer-social-two mt-3">
                <ul class="list-wrap">
                    @include(Theme::getThemeNamespace('widgets.social-links.templates.partials.social-links'))
                </ul>
            </div>
        @endif
    </div>
</div>
