<section class="contact-area contact-bg" @if ($bgImage = $shortcode->background_image) data-background="{{ RvMedia::getImageUrl($bgImage) }}" @endif>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="contact-content">
                    <div class="section-title mb-30 tg-heading-subheading animation-style2">
                        @if ($subtitle = $shortcode->subtitle)
                            <span class="sub-title tg-element-title">{{ $subtitle }}</span>
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
            <div class="col-lg-7">
                <div class="contact-form">
                    {!! $form->renderForm() !!}
                </div>
            </div>
        </div>
    </div>

    @if ($backgroundImage1 = $shortcode->background_image_1)
        <div class="contact-shape">
            {{ RvMedia::image($backgroundImage1, $shortcode->title) }}
        </div>
    @endif
</section>
