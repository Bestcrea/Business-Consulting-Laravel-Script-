<section class="overview-area pt-80 pb-80">
    <div
        class="overview-shape"
        data-aos="fade-left"
        data-aos-delay="200"
        @if ($bgImage = $shortcode->background_image) data-background="{{ RvMedia::getImageUrl($bgImage) }}" @endif
    >

    </div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="overview-img-wrap">
                    @if ($image = $shortcode->image)
                        {{ RvMedia::image($image, $shortcode->title) }}
                    @endif

                    @if ($image1 = $shortcode->image_1)
                        {{ RvMedia::image($image1, $shortcode->title, attributes: ['data-parallax' => '{"x" : 50 }']) }}
                    @endif

                    @if ($bgImage1 = $shortcode->background_image_1)
                        {{ RvMedia::image($bgImage1, $shortcode->title) }}
                    @endif
                    <div class="icon">
                        <i class="flaticon-report-1"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="overview-content">
                    <div class="section-title-two mb-20 tg-heading-subheading animation-style3">
                        @if ($subtitle = $shortcode->subtitle)
                            <span class="sub-title">{!! BaseHelper::clean($subtitle) !!}</span>
                        @endif

                        @if ($title = $shortcode->title)
                            <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
                        @endif
                    </div>

                    @if ($description = $shortcode->description)
                        <p class="info-one">{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    @endif

                    @if (! empty($tabs))
                        <div class="content-bottom">
                            <ul class="list-wrap">
                                @foreach ($tabs as $tab)
                                    @continue(! $tab['title'] && ! $tab['data'])

                                    <li>
                                        @if ($tab['logo_image'])
                                            <div class="icon">
                                                {{ RvMedia::image($tab['logo_image'], $tab['title']) }}
                                            </div>
                                        @elseif ($tab['logo'])
                                            <div class="icon">
                                                <i class="{{ $tab['logo'] }}"></i>
                                            </div>
                                        @endif

                                        @if ($tab['data'] || $tab['title'])
                                            <div class="content">
                                                @if ($tab['data'])
                                                    <h2 class="count"><span
                                                            class="odometer"
                                                            data-count="{{ $tab['data'] }}"
                                                        ></span>{{ $tab['unit'] }}</h2>
                                                @endif

                                                @if ($tab['title'])
                                                    <p>{!! BaseHelper::clean($tab['title']) !!}</p>
                                                @endif
                                            </div>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
