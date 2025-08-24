<section class="about-area-ten">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="about-img-wrap-five about-img-wrap-ten">
                    @if ($image = $shortcode->image)
                        {{ RvMedia::image($image, $shortcode->title) }}
                    @endif

                    @if ($image1 = $shortcode->image_1)
                        {{ RvMedia::image($image1, $shortcode->title, attributes: ['data-parallax' => '{"y" : 100 }']) }}
                    @endif

                    @if (($companyAge = $shortcode->company_age) && ($companyDescription = $shortcode->company_description))
                        <div class="experience-wrap">
                            <h2 class="title">{{ $companyAge }}<span>{!! BaseHelper::clean($companyDescription) !!}</span></h2>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-five about-content-ten">
                    <div class="section-title-two mb-30">
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
                    <div class="about-success-wrap">
                        <ul class="list-wrap">
                            @foreach($tabs as $tab)
                                <li>
                                    @if ($tab['icon'])
                                        <div class="icon">
                                            <i class="{{ $tab['icon'] }}"></i>
                                        </div>
                                    @endif

                                    <div class="content">
                                        @if ($tab['data'])
                                            <h2 class="count"><span class="odometer" data-count="{{ $tab['data'] }}"></span>{{ $tab['unit'] }}</h2>
                                        @endif

                                        @if ($tab['title'])
                                            <p>{!! BaseHelper::clean($tab['title']) !!}</p>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        </ul>
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
