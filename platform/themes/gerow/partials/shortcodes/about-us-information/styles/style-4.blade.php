<section class="about-area-seven pt-80 pb-80">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-9 order-0 order-lg-2">
                <div class="about-img-seven-wrap">
                    @if ($image = $shortcode->image)
                        {{ RvMedia::image($image, $shortcode->title, attributes: ['data-aos' => 'fade-right', 'data-aos-delay' => '0']) }}
                    @endif

                    @if ($image1 = $shortcode->image_1)
                        {{ RvMedia::image($image1, $shortcode->title, attributes: ['data-aos' => 'fade-up', 'data-aos-delay' => '300']) }}
                    @endif

                    @if ($bgImage1 = $shortcode->background_image_1)
                        {{ RvMedia::image($bgImage1, $shortcode->title, attributes: ['data-aos' => 'zoom-in', 'data-aos-delay' => '500']) }}
                    @endif

                    @if (($companyAge = $shortcode->company_age) && ($companyDescription = $shortcode->company_description))
                        <div
                            class="experience-wrap"
                            data-aos="fade-left"
                            data-aos-delay="0"
                        >
                            <h2 class="title">{{ $companyAge }} <span>{{ __('Years') }}</span></h2>
                            <p>{!! BaseHelper::clean($companyDescription) !!}</p>
                        </div>
                    @endif

                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-seven">
                    <div class="section-title mb-30">
                        @if ($subtitle = $shortcode->subtitle)
                            <span class="sub-title">{!! BaseHelper::clean($subtitle) !!}</span>
                        @endif

                        @if ($title = $shortcode->title)
                            <h2 class="title">{!! BaseHelper::clean($title) !!}</h2>
                        @endif
                    </div>

                    @if ($description = $shortcode->description)
                        <p>{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    @endif
                    <div class="success-wrap-two">
                        <ul class="list-wrap">
                            @foreach ($tabs as $tab)
                                <li>
                                    @if ($tab['icon'])
                                        <div class="icon">
                                            <i class="{{ $tab['icon'] }}"></i>
                                        </div>
                                    @elseif($tab['icon_image'])
                                        <div class="icon">
                                            {{ RvMedia::image($tab['icon'], $tab['title']) }}
                                        </div>
                                    @endif
                                    <div class="content">
                                        @if ($tab['data'])
                                            <h2 class="count"><span
                                                    class="odometer"
                                                    data-count="{{ $tab['data'] }}"
                                                ></span>{{ $tab['unit'] }}</h2>
                                        @endif

                                        @if ($tab['title'])
                                            <p>{!! BaseHelper::clean($tab['title']) !!}</p>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    @if ($subDescription = $shortcode->sub_description)
                        <p class="info-two">{!! BaseHelper::clean($subDescription) !!}</p>
                    @endif

                    @if (($buttonLabel = $shortcode->button_label) && ($buttonUrl = $shortcode->button_url))
                        <a
                            class="btn btn-three"
                            href="{{ $buttonUrl }}"
                        >{!! BaseHelper::clean($buttonLabel) !!}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
