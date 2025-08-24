@php
    if (theme_option('preloader_enabled', true)) {
        Theme::asset()->usePath()->add('aos-css', 'plugins/aos/aos.css');
        Theme::asset()->container('footer')->usePath()->add('aos-js', 'plugins/aos/aos.js');
    }
@endphp

<section
    class="choose-area jarallax choose-bg"
    @if ($bgImage = $shortcode->background_image) data-background="{{ RvMedia::getImageUrl($bgImage) }}" @endif
>

    @if ($bgImage1 = $shortcode->background_image_1)
        <div class="choose-shape">
            {{ RvMedia::image($bgImage1, $shortcode->title, attributes: ['data-aos' => 'fade-right', 'data-aos-delay' => 0]) }}
        </div>
    @endif

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="choose-content">
                    <div class="section-title-two white-title mb-20 tg-heading-subheading animation-style3">
                        @if ($title = $shortcode->title)
                            <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
                        @endif
                    </div>

                    @if ($description = $shortcode->description)
                        <p>{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    @endif

                    @if (($videoURL = $shortcode->video_url) && ($buttonLabel = $shortcode->button_label))
                        <a
                            class="play-btn popup-video"
                            href="{{ $videoURL }}"
                        >
                            <i class="fas fa-play"></i> {!! BaseHelper::clean($buttonLabel) !!}
                        </a>
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div
                    class="skill-wrap wow fadeInRight"
                    data-wow-delay=".2s"
                >
                    <div class="section-title-two mb-15">
                        @if ($boxSubtitle = $shortcode->box_subtitle)
                            <span class="sub-title">{!! BaseHelper::clean($boxSubtitle) !!}</span>
                        @endif

                        @if ($boxTitle = $shortcode->box_title)
                            <h2 class="title">{!! BaseHelper::clean($boxTitle) !!}</h2>
                        @endif
                    </div>

                    @if ($boxDescription = $shortcode->box_description)
                        <p>{!! BaseHelper::clean($boxDescription) !!}</p>
                    @endif
                    <div class="progress-wrap">
                        @foreach ($tabs as $tab)
                            <div class="progress-item">
                                @if ($tab['title'])
                                    <h3 class="title">{!! BaseHelper::clean($tab['title']) !!}</h3>
                                @endif
                                <div
                                    class="progress"
                                    role="progressbar"
                                    aria-label="{{ $tab['title'] }}"
                                    aria-valuenow="{{ $tab['percent'] }}"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                >
                                    <div
                                        class="progress-bar wow slideInLeft"
                                        data-wow-delay=".1s"
                                        style="width: {{ $tab['percent'] }}%"
                                    ><span>{{ $tab['percent'] }}%</span></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
