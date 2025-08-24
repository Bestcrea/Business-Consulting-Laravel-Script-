@php
    if ($tabs) {
        $featureList = array_filter($tabs, fn($tab) => $tab['title'] && empty($tab['data']));
        $counterList = array_filter($tabs, fn($tab) => $tab['title'] && $tab['data']);
    }
    $title = $shortcode->title;
@endphp
<section class="about-area-two pt-110 pb-120">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7 col-md-9 order-0 order-lg-2">
                <div class="about-img-two">
                    <div class="main-img">
                        @if ($image = $shortcode->image)
                            {{ RvMedia::image($image, $title, attributes: ['class' => 'main-image']) }}
                        @endif

                        @if ($videoURL = $shortcode->video_url)
                            <a href="{{ $videoURL }}" class="play-btn popup-video" title="{{ __('Play Video') }}">
                                @if ($buttonIcon = $shortcode->button_play_video_label)
                                    <i class="{{ $buttonIcon }}"></i>
                                @else
                                    <i class="fas fa-play"></i>
                                @endif
                            </a>
                        @endif
                    </div>

                    @if ($image1 = $shortcode->image_1)
                        {{ RvMedia::image($image1, $title, attributes: ['class' => 'sub-image']) }}
                    @endif
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-content-two">
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

                    @if ($featureList)
                        <div class="about-list">
                            <ul class="list-wrap">
                                @foreach ($featureList as $feature)
                                    <li><i class="fas fa-check-circle text-primary"></i>{!! BaseHelper::clean($feature['title']) !!}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if ($counterList)
                        <div class="success-wrap">
                            <ul class="list-wrap">
                                @foreach ($counterList as $counter)
                                    <li>
                                        @if ($counter['data'])
                                            @if ($data = $counter['data'] )
                                                <h2 class="count">{{ $data }}</h2>
                                            @endif
                                            @if ($counter['title'])
                                                <p>{!! BaseHelper::clean($counter['title']) !!}</p>
                                            @endif
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (($buttonLabel = $shortcode->button_label) && ($buttonLink = $shortcode->button_url))
                        <a href="{{ $buttonLink }}" class="btn transparent-btn">{{ $buttonLabel }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="about-shape-wrap">
        @if ($bgImage1 = $shortcode->background_image_1)
            {{ RvMedia::image($bgImage1, $title) }}
        @endif

        @if ($bgImage2 = $shortcode->background_image_2)
            {{ RvMedia::image($bgImage2, $title) }}
        @endif
    </div>
</section>
