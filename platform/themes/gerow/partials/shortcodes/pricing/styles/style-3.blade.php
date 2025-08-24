<section class="pricing-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-60 tg-heading-subheading animation-style2">
                    @if ($subtitle = $shortcode->subtitle)
                        <span class="sub-title tg-element-title">{!! BaseHelper::clean($subtitle) !!}</span>
                    @endif

                    @if ($title = $shortcode->title)
                        <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
                    @endif

                    @if ($description = $shortcode->description)
                        <p>{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    @endif
                </div>
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
                        @php($isPopular = $package->is_popular)
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div @class(['pricing-box', 'active' => $isPopular])>
                                @if ($isPopular)
                                    <span class="popular-tag">{{ __('Popular') }}</span>
                                @endif
                                <div class="pricing-head">
                                    <h2 class="title">{{ $package->name }}</h2>
                                    @if ($description = $package->description)
                                        <p>{{ BaseHelper::clean(nl2br($description)) }}</p>
                                    @endif
                                </div>

                                <div class="pricing-price">
                                    <h2 class="price monthly_price">
                                        {{ $package->price }}<span>/{{ __('month') }}</span>
                                    </h2>
                                    <h2 class="price annual_price">
                                        {{ $package->annual_price }}<span>/{{ __('year') }}</span>
                                    </h2>
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
                                    <div class="pricing-btn">
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
