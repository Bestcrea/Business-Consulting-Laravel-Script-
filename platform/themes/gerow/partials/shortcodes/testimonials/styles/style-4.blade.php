<section
    class="testimonial-area testimonial-bg"
    @if ($bgImage = $shortcode->background_image) data-background="{{ RvMedia::getImageUrl($bgImage) }}" @endif
>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5 col-md-8">
                <div class="testimonial-img">
                    @if ($image = $shortcode->image)
                        {{ RvMedia::image($image, $shortcode->title ?: __('Testimonials')) }}
                    @endif
                    <div class="review-wrap">
                        @if ($boxImage = $shortcode->box_image)
                            {{ RvMedia::image($boxImage, $shortcode->box_title) }}
                        @endif
                        <div class="content">
                            @if ($boxTitle = $shortcode->box_title)
                                <h2 class="title">{!! BaseHelper::clean($boxTitle) !!}</h2>
                            @endif

                            @if ($boxDescription = $shortcode->box_description)
                                <p>{!! BaseHelper::clean($boxDescription) !!}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                @if ($testimonials->isNotEmpty())
                    <div class="testimonial-item-wrap">
                        <div class="testimonial-active">
                            @foreach ($testimonials as $testimonial)
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="content-top">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>

                                            @if ($bgImage1 = $shortcode->background_image_1)
                                                <div class="testimonial-quote">
                                                    {{ RvMedia::image($bgImage1, $testimonial->name) }}
                                                </div>
                                            @endif
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
                        <div class="testimonial-nav"></div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
