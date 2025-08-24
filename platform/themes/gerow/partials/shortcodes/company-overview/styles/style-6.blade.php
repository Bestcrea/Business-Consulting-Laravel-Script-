<section class="about-area about-bg" @if ($backgroundImage = $shortcode->background_image) data-background="{{ RvMedia::getImageUrl($backgroundImage) }}" @endif>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                @if ($image = $shortcode->image)
                    <div class="about-img-wrap">
                        {{ RvMedia::image($image, $shortcode->title, attributes: ['class' => 'main-img']) }}
                        @if ($backgroundImage1 = $shortcode->background_image_1)
                            {{ RvMedia::image($backgroundImage1, $shortcode->title) }}
                        @endif

                        @if ($backgroundImage2 = $shortcode->background_image_2)
                            {{ RvMedia::image($backgroundImage2, $shortcode->title) }}
                        @endif
                    </div>
                @endif
            </div>
            <div class="col-lg-7">
                <div class="about-content">
                    <div class="section-title mb-25 tg-heading-subheading animation-style2">
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
                </div>
            </div>
        </div>
    </div>
</section>
