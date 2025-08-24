@php
    if ($tabs) {
        $featureList = array_filter($tabs, fn($tab) => $tab['title'] && empty($tab['data']));
        $counterList = array_filter($tabs, fn($tab) => $tab['title'] && $tab['data']);
    }
@endphp

<section class="about-area-five">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8">
                <div class="about-img-wrap-five">
                    @if ($image = $shortcode->image)
                        {{ RvMedia::image($image, $shortcode->title) }}
                    @endif

                    @if ($image1 = $shortcode->image_1)
                        {{ RvMedia::image($image1, $shortcode->title, attributes: ['data-parallax' => '{"y" : 100 }']) }}
                    @endif

                    @if (($companyAge = $shortcode->company_age) && ($companyDescription = $shortcode->company_description))
                        <div class="experience-wrap">
                            <h2 class="title">{{ $companyAge }} <span>{!! BaseHelper::clean($companyDescription) !!}</span></h2>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="about-content-five">
                    <div class="section-title-two mb-30 tg-heading-subheading animation-style2">
                        @if ($subtitle = $shortcode->subtitle)
                            <span class="sub-title tg-element-title">{!! BaseHelper::clean($subtitle) !!}</span>
                        @endif

                        @if ($title = $shortcode->title)
                            <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
                        @endif
                    </div>

                    @if ($description = $shortcode->description)
                        <p>{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    @endif
                    <div class="about-content-bottom">
                        @if ($featureList)
                            <div class="about-list">
                                <ul class="list-wrap">
                                    @foreach ($featureList as $feature)
                                        <li><i class="fas fa-arrow-right"></i>{!! BaseHelper::clean($feature['title']) !!}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if ($counterList)
                            <div class="about-success-wrap">
                                <ul class="list-wrap">
                                    @foreach ($counterList as $counter)
                                        <li>
                                            @if ($counter['icon'])
                                                <div class="icon">
                                                    <i class="{{ $counter['icon'] }}"></i>
                                                </div>
                                            @elseif($counter['icon_image'])
                                                <div class="icon">
                                                    {{ RvMedia::image($tab['icon'], $tab['title']) }}
                                                </div>
                                            @endif

                                            @if ($counter['data'])
                                                <div class="content">
                                                    <h2 class="count"><span
                                                            class="odometer"
                                                            data-count="{{ $counter['data'] }}"
                                                        ></span>{{ $counter['unit'] }}</h2>
                                                    <p>{!! BaseHelper::clean($counter['title']) !!}</p>
                                                </div>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if ($bgImage1 = $shortcode->background_image_1)
        <div class="about-shape-five">
            {{ RvMedia::image($bgImage1, $shortcode->title) }}
        </div>
    @endif
</section>
