<section class="pricing-area-two">
    @if ($bgImage = $shortcode->background_image)
        <div class="pricing-shape">
            {{ RvMedia::image($bgImage, $shortcode->title, attributes: ['data-aos' => 'fade-left', 'data-aos-delay' => '200']) }}
        </div>
    @endif
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="section-title-two mb-50 tg-heading-subheading animation-style3">
                    @if ($subtitle = $shortcode->subtitle)
                        <span class="sub-title">{!! BaseHelper::clean($subtitle) !!}</span>
                    @endif

                    @if ($title = $shortcode->title)
                        <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 col-md-10">
                @if ($description = $shortcode->description)
                    <div class="section-top-content mb-30">
                        <p>{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    </div>
                @endif
            </div>
        </div>
        @if ($packages->isNotEmpty())
            <div class="pricing-item-wrap">
                <div class="pricing-tab">
                    <span class="tab-btn monthly_tab_title">{{ __('Monthly') }}</span>
                    <span class="pricing-tab-switcher"></span>
                    <span class="tab-btn annual_tab_title">{{ __('Yearly') }}</span>
                </div>
                <div class="row justify-content-center">
                    @foreach ($packages as $package)
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="pricing-box-two">
                                @if ($package->is_popular)
                                    <span class="popular">{{ __('Popular') }}</span>
                                @endif
                                <div class="pricing-head-two">
                                    <h2 class="title">{{ $package->name }}</h2>
                                    <div class="pricing-price-two">
                                        <h3 class="price monthly_price">
                                            {{ $package->price }}<span>/{{ __('month') }}</span></h3>
                                        <h3 class="price annual_price">
                                            {{ $package->annual_price }}<span>/{{ __('year') }}</span></h3>
                                    </div>
                                </div>
                                <div class="pricing-bottom">
                                    <div class="pricing-list">
                                        <ul class="list-wrap justify-content-start">
                                            @foreach ($package->feature_list as $feature)
                                                <li>
                                                    <span>
                                                        @if ($feature['is_available'])
                                                            <i class="fa fa-check text-primary"></i>
                                                        @else
                                                            <i class="fa fa-ban text-danger"></i>
                                                        @endif
                                                        <span class="ms-2">{{ $feature['value'] }}</span>
                                                    </span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    @if (
                                        ($actionLabel = $package->action_label) &&
                                            ($actionUrl = $package->action_url))
                                        <div class="text-start">
                                            <a
                                                class="btn"
                                                href="{{ $actionUrl }}"
                                            >{{ $actionLabel }}</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>
