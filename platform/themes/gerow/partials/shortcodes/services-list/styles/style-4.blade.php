@php
    if (theme_option('preloader_enabled', true)) {
        Theme::asset()->usePath()->add('aos-css', 'plugins/aos/aos.css');
        Theme::asset()->container('footer')->usePath()->add('aos-js', 'plugins/aos/aos.js');
    }
@endphp

<section class="services-area-three">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6 col-md-8">
                <div class="section-title-two mb-50">
                    @if ($badge = $shortcode->badge)
                        <span class="sub-title">{{ $badge }}</span>
                    @endif
                    @if ($title = $shortcode->title)
                        <h2 class="title">{!! BaseHelper::clean($title) !!}</h2>
                    @endif
                </div>
            </div>
            @if (($buttonLabel = $shortcode->button_label) && ($buttonLink = $shortcode->link))
                <div class="col-xl-7 col-lg-6 col-md-4">
                    <div class="view-all-btn text-end mb-30">
                        <a
                            class="btn transparent-btn-two"
                            href="{{ $buttonLink }}"
                        >{{ $buttonLabel }}</a>
                    </div>
                </div>
            @endif
        </div>
        <div class="row justify-content-center">
            @foreach ($services as $service)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                    <div class="services-item-three">
                        <div class="services-thumb-three">
                            <a href="{{ $service->url }}">
                                {{ RvMedia::image($service->image, $service->name) }}
                            </a>
                        </div>
                        <div class="services-content-three">
                            @if ($iconImage = $service->getMetaData('icon_image', true))
                                <div class="services-icon">
                                    {{ RvMedia::image($iconImage, $service->name) }}
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
                                <div class="overlay-icon pb-10">
                                    {{ RvMedia::image($iconImage, $service->name) }}
                                </div>
                            @elseif ($icon = $service->getMetaData('icon', true))
                                <div class="overlay-icon pb-10">
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
            {{ RvMedia::image($bgImage, $shortcode->title, attributes: ['class' => 'aos-init aos-animate', 'data-aos' => 'fade-left', 'data-aos-delay' => '200']) }}
        </div>
    @endif
</section>
