<section class="banner-area-three">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9 order-0 order-lg-2">
                <div
                    class="banner-img-three"
                    data-aos="fade-left"
                    data-aos-delay="300"
                >
                    @if ($image = $shortcode->image)
                        {{ RvMedia::image($image, $shortcode->title, attributes: ['class' => 'main-img']) }}
                    @endif

                    @if ($image1 = $shortcode->image_1)
                        {{ RvMedia::image($image1, $shortcode->title, attributes: ['class' => 'img-two', 'data-parallax' => '{"y" : 100 }']) }}
                    @endif

                    @if ($image2 = $shortcode->image_2)
                        {{ RvMedia::image($image2, $shortcode->title, attributes: ['class' => 'img-three', 'data-parallax' => '{"x" : -100 }']) }}
                    @endif
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner-content-three">
                    @if ($title = $shortcode->title)
                        <h2
                            class="title"
                            data-aos="fade-right"
                            data-aos-delay="0"
                        >{!! BaseHelper::clean($title) !!}</h2>
                    @endif

                    @if ($description = $shortcode->description)
                        <p
                            data-aos="fade-right"
                            data-aos-delay="300"
                        >{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    @endif

                    @if (is_plugin_active('newsletter'))
                        <form
                            class="banner-form newsletter-form"
                            data-aos="fade-right"
                            data-aos-delay="600"
                            action="{{ route('public.newsletter.subscribe') }}"
                            method="post"
                        >
                            @csrf

                            <input
                                name="email"
                                type="email"
                                placeholder="{{ __('E-mail Address') }}"
                            >
                            @if (setting('enable_captcha') && is_plugin_active('captcha'))
                                <div class="mb-3">
                                    {!! Captcha::display() !!}
                                </div>
                            @endif
                            <button type="submit" title="{{ __('Subscribe') }}"><i class="flaticon-right-arrow"></i></button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="banner-shape-wrap-three">
        @if ($bgImage1 = $shortcode->background_image_1)
            {{ RvMedia::image($bgImage1, $shortcode->title) }}
        @endif

        @if ($bgImage2 = $shortcode->background_image_2)
            {{ RvMedia::image($bgImage2, $shortcode->title) }}
        @endif
    </div>
</section>
