<section class="overview-area-two">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="overview-img-two">
                    @if ($image = $shortcode->image)
                        <div
                            @if ($bgImage = $shortcode->background_image) class="mask-img-two" style="-webkit-mask-image: url({{ RvMedia::getImageUrl($bgImage) }});" @endif
                        >
                            {{ RvMedia::image($image, $shortcode->title) }}
                        </div>
                    @endif

                    @if ($image1 = $shortcode->image_1)
                        {{ RvMedia::image($image1, $shortcode->title, attributes: ['class' => 'img-two', 'data-parallax' => '{"y" : 100 }']) }}
                    @endif

                    <div class="overview-shape-wrap">
                        @if ($bgImage1 = $shortcode->background_image_1)
                            {{ RvMedia::image($bgImage1, $shortcode->title) }}
                        @endif

                        @if ($bgImage2 = $shortcode->background_image_2)
                            {{ RvMedia::image($bgImage2, $shortcode->title) }}
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="overview-content-two">
                    <div class="section-title-two mb-30 tg-heading-subheading animation-style1">
                        @if ($subtitle = $shortcode->subtitle)
                            <span class="sub-title tg-element-title">{!! BaseHelper::clean($subtitle) !!}</span>
                        @endif

                        @if ($title = $shortcode->title)
                            <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
                        @endif
                    </div>

                    @if ($description = $shortcode->description)
                        <p>{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    @endif

                    @if (! empty($tabs))
                        <div class="progress-wrap">
                            @foreach ($tabs as $tab)
                                @continue(! $tab['title'] && ! $tab['data'])

                                <div class="progress-item">
                                    @if ($tab['title'])
                                        <h3 class="title">{!! BaseHelper::clean($tab['title']) !!}</h3>
                                    @endif

                                    @if ($tab['data'])
                                        <div
                                            class="progress"
                                            role="progressbar"
                                            aria-label="{{ $tab['title'] }}"
                                            aria-valuenow="{{ $tab['data'] }}"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                        >
                                            <div
                                                class="progress-bar wow slideInLeft"
                                                data-wow-delay=".1s"
                                                style="width: {{ $tab['data'] }}%"
                                            ><span>{{ $tab['data'] }}%</span></div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
