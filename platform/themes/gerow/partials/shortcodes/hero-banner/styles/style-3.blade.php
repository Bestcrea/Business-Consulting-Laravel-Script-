<section
    class="banner-area-four banner-bg-four"
    @if ($bgImage = $shortcode->background_image) data-background="{{ RvMedia::getImageUrl($bgImage) }}" @endif
>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-6 col-md-10 order-0 order-lg-2">
                @if ($image = $shortcode->image)
                    <div class="banner-img-four text-end">
                        {{ RvMedia::image($image, $shortcode->title, attributes: ['data-aos' => 'fade-left', 'data-aos-delay' => '400']) }}
                    </div>
                @endif
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="banner-content-four">
                    @if ($subtitle = $shortcode->subtitle)
                        <span
                            class="sub-title"
                            data-aos="fade-up"
                            data-aos-delay="0"
                        >{!! BaseHelper::clean($subtitle) !!}</span>
                    @endif

                    @if ($title = $shortcode->title)
                        <h2
                            class="title"
                            data-aos="fade-up"
                            data-aos-delay="200"
                        >{!! BaseHelper::clean($title) !!}</h2>
                    @endif

                    @if ($description = $shortcode->description)
                        <p
                            data-aos="fade-up"
                            data-aos-delay="400"
                        >{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    @endif

                    @if (($buttonLabel = $shortcode->button_label) && ($buttonUrl = $shortcode->button_url))
                        <a
                            class="btn btn-three"
                            data-aos="fade-up"
                            data-aos-delay="600"
                            href="{{ $buttonUrl }}"
                        >{!! BaseHelper::clean($buttonLabel) !!}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="banner-shape-wrap-four">
        @if ($bgImage1 = $shortcode->background_image_1)
            {{ RvMedia::image($bgImage1, $shortcode->title) }}
        @endif

        @if ($bgImage2 = $shortcode->background_image_2)
            {{ RvMedia::image($bgImage2, $shortcode->title, attributes: ['data-aos' => 'zoom-in', 'data-aos-delay' => '600']) }}
        @endif

        @if ($bgImage3 = $shortcode->background_image_3)
            {{ RvMedia::image($bgImage3, $shortcode->title, attributes: ['data-aos' => 'zoom-in-up', 'data-aos-delay' => '800']) }}
        @endif
    </div>
</section>
