<section
    class="testimonial-area-two testimonial-bg-two"
    @if ($bgImage = $shortcode->background_image) data-background="{{ RvMedia::getImageUrl($bgImage) }}" @endif
>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title-two white-title text-center mb-50 tg-heading-subheading animation-style3">
                    @if ($subtitle = $shortcode->subtitle)
                        <span class="sub-title">{!! BaseHelper::clean($subtitle) !!}</span>
                    @endif

                    @if ($title = $shortcode->title)
                        <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
                    @endif
                </div>
            </div>
        </div>
        <div class="testimonial-item-wrap-two">
            <div class="row testimonial-active-two">
                @foreach ($testimonials as $testimonial)
                    <div class="col-lg-6">
                        <div class="testimonial-item-two">
                            <div class="testimonial-content-two">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>{!! BaseHelper::clean($testimonial->content) !!}</p>
                                <div class="testimonial-avatar">
                                    <div class="avatar-thumb">
                                        {{ RvMedia::image($testimonial->image, $testimonial->name) }}
                                    </div>
                                    <div class="avatar-info">
                                        <h2 class="title">{{ $testimonial->name }}</h2>
                                        <span>{{ $testimonial->company }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="testimonial-nav-two"></div>
        </div>
    </div>
</section>
