<section class="request-area request-bg"
         @if ($bgImage = $shortcode->background_image)
             data-background="{{ RvMedia::getImageUrl($bgImage) }}"
         @endif
>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                @if ($title = $shortcode->title)
                    <div class="request-content">
                        <h2 class="title">{!! BaseHelper::clean($title) !!}</h2>
                    </div>
                @endif
            </div>
            <div class="col-lg-7">
                <div class="request-content-right">
                    <div class="request-contact">
                        <div class="icon">
                            <i class="flaticon-phone-call"></i>
                        </div>
                        <div class="content">
                            @if ($subtitle = $shortcode->subtitle)
                                <span>{{ $subtitle }}</span>
                            @endif

                            @if ($hotline = $shortcode->hotline)
                                <a href="tel:{{ $hotline }}" dir="ltr">{{ $hotline }}</a>
                            @endif
                        </div>
                    </div>

                    @if (($buttonLabel = $shortcode->button_label) && ($buttonUrl = $shortcode->button_url))
                        <div class="request-btn">
                            <a href="{{ $buttonUrl }}" class="btn">{!! BaseHelper::clean($buttonLabel) !!}</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @if ($bgImage1 = $shortcode->background_image_1)
        <div class="request-shape">
            {{ RvMedia::image($bgImage1, $shortcode->title) }}
        </div>
    @endif
</section>
