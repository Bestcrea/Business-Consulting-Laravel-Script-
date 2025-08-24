@php
    if (theme_option('preloader_enabled', true)) {
        Theme::asset()->usePath()->add('aos-css', 'plugins/aos/aos.css');
        Theme::asset()->container('footer')->usePath()->add('aos-js', 'plugins/aos/aos.js');
    }
@endphp

<section
    class="choose-area-two"
    @if ($bgColor = $shortcode->background_color) style="background-color: {{ $bgColor }}" @endif
>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="choose-img-two">
                    @if ($image = $shortcode->image)
                        {{ RvMedia::image($image, $shortcode->title) }}
                    @endif

                    @if ($bgImage1 = $shortcode->background_image_1)
                        {{ RvMedia::image($bgImage1, $shortcode->title) }}
                    @endif

                    @if ($bgImage2 = $shortcode->background_image_2)
                        {{ RvMedia::image($bgImage2, $shortcode->title) }}
                    @endif
                </div>
            </div>

            <div class="col-lg-6">
                <div class="choose-content-two">
                    <div class="section-title-two white-title mb-30 tg-heading-subheading animation-style2">
                        @if ($subtitle = $shortcode->subtitle)
                            <span class="tg-element-title">{!! BaseHelper::clean($subtitle) !!}</span>
                        @endif

                        @if ($title = $shortcode->title)
                            <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
                        @endif
                    </div>

                    @if ($description = $shortcode->description)
                        <p>{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    @endif
                    <div class="choose-circle-wrap">
                        @foreach ($tabs as $tab)
                            <div class="circle-item" data-color="{{ theme_option('primary_color', '#0055FF') }}">
                                @if ($tab['data'])
                                    <div
                                        class="chart"
                                        data-percent="{{ $tab['data'] }}"
                                    >
                                        <div class="circle-content">
                                            <span class="percentage">{{ $tab['data'] }}{{ $tab['unit'] }}</span>
                                            @if ($tab['title'])
                                                <p>{!! BaseHelper::clean($tab['title']) !!}</p>
                                            @endif
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($bgImage3 = $shortcode->background_image_3)
        <div class="choose-shape">
            {{ RvMedia::image($bgImage3, $shortcode->title, attributes: ['data-aos' => 'fade-right', 'data-aos-delay' => 200]) }}
        </div>
    @endif
</section>
