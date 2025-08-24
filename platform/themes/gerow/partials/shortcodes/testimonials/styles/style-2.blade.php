<section class="testimonial-area-three">
    <div class="container">
        <div class="row g-0 align-items-end">
            <div class="col-37">
                @if ($image = $shortcode->image)
                    <div class="testimonial-img-three">
                        {{ RvMedia::image($image, $shortcode->title ?: __('Testimonials')) }}
                    </div>
                @endif
            </div>
            <div class="col-63">
                <div
                    class="testimonial-item-wrap-three"
                    @if ($bgImage = $shortcode->background_image) data-background="{{ RvMedia::getImageUrl($bgImage) }}" @endif
                >
                    <div class="testimonial-active-three">
                        @foreach ($testimonials as $testimonial)
                            <div class="testimonial-item-three">
                                <div class="testimonial-content-three">
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
                    <div class="testimonial-nav-three"></div>
                </div>
            </div>
        </div>
    </div>
</section>
