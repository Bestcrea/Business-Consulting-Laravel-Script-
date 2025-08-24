@php
    if (theme_option('preloader_enabled', true)) {
        Theme::asset()->usePath()->add('aos-css', 'plugins/aos/aos.css');
        Theme::asset()->container('footer')->usePath()->add('aos-js', 'plugins/aos/aos.js');
    }
@endphp

<section
    class="testimonial-area-four testimonial-bg-four"
    @if ($bgImage = $shortcode->background_image) data-background="{{ RvMedia::getImageUrl($bgImage) }}" @endif
>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5 col-md-8">
                <div class="testimonial-img-four">
                    @if ($image = $shortcode->image)
                        {{ RvMedia::image($image, $shortcode->title, attributes: ['loading' => false]) }}
                    @endif

                    @if ($bgImage4 = $shortcode->background_image_4)
                        <div class="icon">
                            {{ RvMedia::image($bgImage4, $shortcode->title, attributes: ['loading' => false]) }}
                        </div>
                    @endif

                    @if ($bgImage1 = $shortcode->background_image_1)
                        {{ RvMedia::image($bgImage1, $shortcode->title, attributes: ['class' => 'shape', 'loading' => false]) }}
                    @endif
                </div>
            </div>
            <div class="col-lg-7">
                @if ($testimonials->isNotEmpty())
                    <div class="testimonial-item-wrap-four">
                        <div class="testimonial-active-four">
                            @foreach ($testimonials as $testimonial)
                                <div class="testimonial-item-four">
                                    <div class="testimonial-content-four">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p>{!! BaseHelper::clean($testimonial->content) !!}</p>
                                        <div class="testimonial-info">
                                            <h2 class="title">{{ $testimonial->name }}</h2>
                                            <span>{{ $testimonial->company }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="testimonial-nav-four"></div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="testimonial-shape-wrap-four">
        @if ($bgImage2 = $shortcode->background_image_2)
            {{ RvMedia::image($bgImage2, $shortcode->title, attributes: ['data-aos' => 'fade-up-right', 'data-aos-delay' => '200']) }}
        @endif

        @if ($bgImage3 = $shortcode->background_image_3)
            {{ RvMedia::image($bgImage3, $shortcode->title, attributes: ['data-aos' => 'fade-down-left', 'data-aos-delay' => '200']) }}
        @endif
    </div>
</section>
