<section class="banner-area-five has-animation">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7 col-md-10 order-0 order-lg-2">
                <div class="banner-img-five">
                    @if ($image = $shortcode->image)
                        {{ RvMedia::image($image, $shortcode->title, attributes: ['class' => 'main-img']) }}
                    @endif

                    @if ($image1 = $shortcode->image_1)
                        {{ RvMedia::image($image1, $shortcode->title, attributes: ['class' => 'shape-one', 'data-aos' => 'fade-up-left', 'data-aos-delay' => '600']) }}
                    @endif

                    @if ($bgImage = $shortcode->background_image)
                        {{ RvMedia::image($bgImage, $shortcode->title, attributes: ['class' => 'shape-two']) }}
                    @endif

                    @if ($bgImage1 = $shortcode->background_image_1)
                        {{ RvMedia::image($bgImage1, $shortcode->title, attributes: ['class' => 'shape-three']) }}
                    @endif
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner-content-five">
                    @if ($title = BaseHelper::clean($shortcode->title))
                        <h2 class="title" data-aos="fade-right" data-aos-delay="0">
                            @if($highlightText = BaseHelper::clean($shortcode->highlight_text))
                                {!!
                                    str_replace($highlightText, '<span>' . $highlightText . '
                                        <svg class="svg-color" viewBox="0 0 183 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.1884 13.1749C27.3244 9.45935 96.6096 -9.08021 181.595 12.5919" stroke="currentColor" stroke-width="4" />
                                        </svg>
                                    </span>', $title)
                                !!}
                            @else
                                {!! BaseHelper::clean($title) !!}
                            @endif
                        </h2>
                    @endif

                    @if ($description = $shortcode->description)
                        <p data-aos="fade-right" data-aos-delay="300">{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    @endif

                    @if (($buttonLabel = $shortcode->button_label) && ($buttonUrl = $shortcode->button_url))
                        <a href="{{ $buttonUrl }}" class="btn btn-three" data-aos="fade-right" data-aos-delay="600">{!! BaseHelper::clean($buttonLabel) !!}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
