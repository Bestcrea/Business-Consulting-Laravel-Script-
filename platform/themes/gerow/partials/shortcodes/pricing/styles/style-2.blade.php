<section class="pricing-area-three">
    <div class="pricing-shape">
        @if ($bgImage = $shortcode->background_image)
            {{ RvMedia::image($bgImage, $shortcode->title, attributes: ['data-aos' => 'fade-left', 'data-aos-delay' => '200']) }}
        @endif
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="section-title-two mb-50 tg-heading-subheading animation-style2">
                    @if ($subtitle = $shortcode->subtitle)
                        <span class="sub-title tg-element-title">{!! BaseHelper::clean($subtitle) !!}</span>
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
                            <div class="pricing-box-three">
                                @if ($image = $package->getMetaData('image', true))
                                    <div class="pricing-icon">
                                        {{ RvMedia::image($package->getMetaData('image', true), $package->name) }}
                                    </div>
                                @elseif ($icon = $package->getMetaData('icon', true))
                                    <div class="pricing-icon">
                                        <i class="{{ $icon }}"></i>
                                    </div>
                                @endif
                                <div class="pricing-plan">
                                    <h3 class="title">{{ $package->name }}</h3>
                                </div>
                                <div class="pricing-price-two">
                                    <h2 class="price monthly_price">
                                        {{ $package->price }}<span>/{{ __('month') }}</span></h2>
                                    <h2 class="price annual_price">
                                        {{ $package->annual_price }}<span>/{{ __('year') }}</span></h2>
                                </div>
                                <div class="pricing-list">
                                    <ul class="list-wrap justify-content-center">
                                        @foreach ($package->feature_list as $feature)
                                            <li>
                                                <span @class(['text-line-through' => ! $feature['is_available']])>
                                                    {{ $feature['value'] }}
                                                </span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @if (
                                    ($actionLabel = $package->action_label) &&
                                        ($actionUrl = $package->action_url))
                                    <div class="text-center">
                                        <a
                                            class="btn"
                                            href="{{ $actionUrl }}"
                                        >{{ $actionLabel }}</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>
