<section class="cta-area-five">
    <div class="container">
        <div class="cta-inner-wrap-two"
             @if ($bgImage = $shortcode->background_image)
                 data-background="{{ RvMedia::getImageUrl($bgImage) }}"
            @endif
        >
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <div class="cta-content">
                        <div class="cta-info-wrap">
                            <div class="icon">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <div class="content">
                                @if ($subtitle = $shortcode->subtitle)
                                    <span>{!! BaseHelper::clean($subtitle) !!}</span>
                                @endif

                                @if ($hotline = $shortcode->hotline)
                                    <a href="tel:{{ $hotline }}" dir="ltr">{{ $hotline }}</a>
                                @endif
                            </div>
                        </div>

                        @if ($title = $shortcode->title)
                            <h2 class="title">{!! BaseHelper::clean($title) !!}</h2>
                        @endif
                    </div>
                </div>
                <div class="col-lg-3">
                    @if (($buttonLabel = $shortcode->button_label) && ($buttonUrl = $shortcode->button_url))
                        <div class="cta-btn text-end">
                            <a href="{{ $buttonUrl }}" class="btn btn-three">{{ $buttonLabel }}</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
