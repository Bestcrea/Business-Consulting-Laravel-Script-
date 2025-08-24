@php
    if (theme_option('preloader_enabled', true)) {
        Theme::asset()->usePath()->add('aos-css', 'plugins/aos/aos.css');
        Theme::asset()->container('footer')->usePath()->add('aos-js', 'plugins/aos/aos.js');
    }
@endphp

<section class="estimate-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="estimate-content">
                    <div class="section-title-two mb-30 tg-heading-subheading animation-style2">
                        @if ($subtitle = $shortcode->subtitle)
                            <span class="sub-title tg-element-title">{!! BaseHelper::clean($subtitle) !!}</span>
                        @endif

                        @if ($title = $shortcode->title)
                            <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
                        @endif
                    </div>
                    <div class="estimate-tab-wrap">
                        <div class="estimate-form-wrap">
                            {!! Theme::partial('request-quote-form', compact('shortcode', 'customFields')) !!}
                        </div>
                    </div>
                </div>
            </div>

            @if ($image = $shortcode->image)
                <div class="col-lg-6">
                    <div class="estimate-img text-center">
                        {{ RvMedia::image($image, $shortcode->title) }}
                    </div>
                </div>
            @endif
        </div>
    </div>

    @if ($bgImage = $shortcode->background_image)
        <div class="estimate-shape">
            {{ RvMedia::image($bgImage, $shortcode->title, attributes: ['data-aos' => 'fade-left', 'data-aos-delay' => 200]) }}
        </div>
    @endif
</section>
