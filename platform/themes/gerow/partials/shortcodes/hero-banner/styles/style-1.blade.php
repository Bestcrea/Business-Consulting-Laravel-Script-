<section
    class="banner-area-two banner-bg-two"
    @if ($bgImage = $shortcode->background_image) data-background="{{ RvMedia::getImageUrl($bgImage) }}" @endif
>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-content-two">
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
                            data-aos-delay="300"
                        >{!! BaseHelper::clean($title) !!}</h2>
                    @endif

                    @if ($description = $shortcode->description)
                        <p
                            data-aos="fade-up"
                            data-aos-delay="500"
                        >{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    @endif

                    <div class="banner-btn">
                        @if (($buttonLabel = $shortcode->button_label) && ($buttonUrl = $shortcode->button_url))
                            <a
                                class="btn"
                                data-aos="fade-right"
                                data-aos-delay="700"
                                href="{{ $buttonUrl }}"
                            >
                                {!! BaseHelper::clean($buttonLabel) !!}
                            </a>
                        @endif

                        @if (($videoUrl = $shortcode->video_url) && ($buttonPlayVideoLabel = $shortcode->button_play_video_label))
                            <a
                                class="play-btn popup-video"
                                data-aos="fade-left"
                                data-aos-delay="700"
                                href="{{ $videoUrl }}"
                            ><i class="fas fa-play"></i>
                                <span>{!! BaseHelper::clean($buttonPlayVideoLabel) !!}</span>
                            </a>
                        @endif

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                @if ($image = $shortcode->image)
                    <div class="banner-img text-center">
                        {{ RvMedia::image($image, $shortcode->title, attributes: ['data-aos' => 'fade-left', 'data-aos-delay' => 400]) }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="banner-shape-wrap">
        @if ($bgImage1 = $shortcode->background_image_1)
            {{ RvMedia::image($bgImage1, $shortcode->title) }}
        @endif

        @if ($bgImage2 = $shortcode->background_image_2)
            {{ RvMedia::image($bgImage2, $shortcode->title) }}
        @endif

        @if ($bgImage3 = $shortcode->background_image_3)
            {{ RvMedia::image($bgImage3, $shortcode->title, attributes: ['data-aos' => 'zoom-in-up', 'data-aos-delay' => 800]) }}
        @endif
    </div>
</section>
