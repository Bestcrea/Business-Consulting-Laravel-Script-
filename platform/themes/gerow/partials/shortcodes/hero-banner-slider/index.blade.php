<section class="slider-area">
    <div class="slider-active" data-autoplay="{{ $shortcode->is_autoplay == 'yes' }}" data-autoplay-speed="{{ in_array($shortcode->autoplay_speed, [2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000]) ? $shortcode->autoplay_speed : 3000 }}">
        <div class="single-slider slider-bg" @if ($image1 = $shortcode->image_1) data-background="{{ RvMedia::getImageUrl($image1) }}" @endif>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="slider-content">
                            @if ($subtitle1 = $shortcode->subtitle_1)
                                <span class="sub-title" data-animation="fadeInUp" data-delay=".2s">{{ $subtitle1 }}</span>
                            @endif

                            @if ($title1 = $shortcode->title_1)
                                <h2 class="title" data-animation="fadeInUp" data-delay=".4s">{!! BaseHelper::clean($title1) !!}</h2>
                            @endif

                            @if ($description1 = $shortcode->description_1)
                                <p data-animation="fadeInUp" data-delay=".6s">{!! BaseHelper::clean($description1) !!}</p>
                            @endif

                            @if (($buttonLabel1 = $shortcode->button_label_1) && ($buttonLink1 = $shortcode->button_url_1))
                                <a href="{{ $buttonLink1 }}" class="btn" data-animation="fadeInUp" data-delay=".8s">{{ $buttonLabel1 }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @if ($backgroundImage1 = $shortcode->background_image_1)
                <div class="slider-shape">
                    {{ RvMedia::image($backgroundImage1, $shortcode->title ?: __('Shape'), attributes: ['data-animation' => 'zoomIn', 'data-delay' => '.8s']) }}
                </div>
            @endif
        </div>
        <div class="single-slider slider-bg" @if ($image2 = $shortcode->image_2) data-background="{{ RvMedia::getImageUrl($image2) }}" @endif>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="slider-content">
                            @if ($subtitle2 = $shortcode->subtitle_2)
                                <span class="sub-title" data-animation="fadeInUp" data-delay=".2s">{{ $subtitle2 }}</span>
                            @endif

                            @if ($title2 = $shortcode->title_2)
                                <h2 class="title" data-animation="fadeInUp" data-delay=".4s">{!! BaseHelper::clean($title2) !!}</h2>
                            @endif

                            @if ($description2 = $shortcode->description_2)
                                <p data-animation="fadeInUp" data-delay=".6s">{!! BaseHelper::clean($description2) !!}</p>
                            @endif

                            @if (($buttonLabel2 = $shortcode->button_label_2) && ($buttonLink2 = $shortcode->button_url_2))
                                <a href="{{ $buttonLink2 }}" class="btn" data-animation="fadeInUp" data-delay=".8s">{{ $buttonLabel2 }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @if ($backgroundImage2 = $shortcode->background_image_2)
                <div class="slider-shape">
                    {{ RvMedia::image($backgroundImage2, $shortcode->title ?: __('Shape'), attributes: ['data-animation' => 'zoomIn', 'data-delay' => '.8s']) }}
                </div>
            @endif
        </div>
    </div>
</section>
