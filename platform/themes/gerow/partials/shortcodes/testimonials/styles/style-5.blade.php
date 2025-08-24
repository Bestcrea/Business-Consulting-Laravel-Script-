<section class="testimonial-area-five">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="testimonial-img-five">
                    @if ($image = $shortcode->image)
                        {{ RvMedia::image($image, $shortcode->title) }}
                    @endif

                    @if ($bgImage = $shortcode->background_image)
                        {{ RvMedia::image($bgImage, $shortcode->title, attributes: ['class' => 'shape-one']) }}
                    @endif

                    @if ($bgImage1 = $shortcode->background_image_1)
                        {{ RvMedia::image($bgImage1, $shortcode->title, attributes: ['class' => 'shape-two']) }}
                    @endif

                    @if ($bgImage2 = $shortcode->background_image_2)
                        {{ RvMedia::image($bgImage2, $shortcode->title, attributes: ['class' => 'shape-three']) }}
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-content-five">
                    <div class="section-title title-three mb-50 tg-heading-subheading animation-style1">
                        @if ($subtitle = $shortcode->subtitle)
                            <span class="sub-title tg-element-title">{!! BaseHelper::clean($subtitle) !!}</span>
                        @endif

                        @if ($title = $shortcode->title)
                            <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
                        @endif
                    </div>
                    @if ($testimonials->isNotEmpty())
                        <div class="testimonial-item-wrap-five">
                            <div class="testimonial-active-five">
                                @foreach($testimonials as $testimonial)
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
                                                @if ($bgImage3 = $shortcode->background_image_3)
                                                    <div class="testimonial-quote">
                                                        {{ RvMedia::image($bgImage3, $testimonial->name) }}
                                                    </div>
                                                @endif
                                            </div>
                                            <p>{!! BaseHelper::clean(Str::limit($testimonial->content, 150)) !!}</p>
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
                                @endforeach
                            </div>
                            <div class="testimonial-nav-five"></div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
