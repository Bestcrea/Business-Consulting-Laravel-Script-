<section class="services-area-three">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6 col-md-8">
                <div class="section-title-two mb-50 tg-heading-subheading animation-style2">
                    @if ($subtitle = $shortcode->subtitle)
                        <span class="sub-title tg-element-title">{!! BaseHelper::clean($subtitle) !!}</span>
                    @endif

                    @if ($title = $shortcode->title)
                        <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
                    @endif
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-4">
                @if (($buttonLabel = $shortcode->button_label) && ($buttonUrl = $shortcode->button_url))
                    <div class="view-all-btn text-end mb-30">
                        <a
                            class="btn transparent-btn-two"
                            href="{{ $buttonUrl }}"
                        >{!! BaseHelper::clean($buttonLabel) !!}</a>
                    </div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($services as $service)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                    <div class="services-item-three">
                        <div class="services-thumb-three">
                            <a href="{{ $service->url }}">
                                {{ RvMedia::image($service->image, $service->name, 'small') }}
                            </a>
                        </div>
                        <div class="services-content-three">
                            @if ($iconImage = $service->getMetaData('icon_image', true))
                                <div class="services-icon">
                                    {{ RvMedia::image($iconImage, $service->name, attributes: ['width' => 32, 'height' => 32, 'loading' => false]) }}
                                </div>
                            @elseif ($icon = $service->getMetaData('icon', true))
                                <div class="services-icon">
                                    <i class="{{ $icon }}"></i>
                                </div>
                            @endif

                            <h3 class="title"><a href="{{ $service->url }}">{{ $service->name }}</a></h3>

                            @if ($description = $service->description)
                                <p class="truncate-3-custom" title="{{ $description }}">{!! BaseHelper::clean(nl2br($description)) !!}</p>
                            @endif

                            @if ($iconImage = $service->getMetaData('icon_image', true))
                                <div class="overlay-icon">
                                    {{ RvMedia::image($iconImage, $service->name, attributes: ['width' => 32, 'height' => 32, 'loading' => false]) }}
                                </div>
                            @elseif ($icon = $service->getMetaData('icon', true))
                                <div class="overlay-icon">
                                    <i class="{{ $icon }}"></i>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @if ($bgImage = $shortcode->background_image)
        <div class="services-shape-four">
            {{ RvMedia::image($bgImage, $shortcode->title, attributes: ['data-aos' => 'fade-left', 'data-aos-delay' => '200']) }}
        </div>
    @endif
</section>
