<section
    class="services-area-two services-bg-two"
    @if ($bgImage = $shortcode->background_image) data-background="{{ RvMedia::getImageUrl($bgImage) }}" @endif
>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-8">
                <div class="section-title-two mb-60 tg-heading-subheading animation-style3">
                    @if ($subtitle = $shortcode->subtitle)
                        <span class="sub-title">{!! BaseHelper::clean($subtitle) !!}</span>
                    @endif

                    @if ($title = $shortcode->title)
                        <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 col-md-4">
                @if (($buttonLabel = $shortcode->button_label) && ($buttonUrl = $shortcode->button_url))
                    <div class="view-all-btn text-end mb-30">
                        <a
                            class="btn"
                            href="{{ $buttonUrl }}"
                        >{!! BaseHelper::clean($buttonLabel) !!}</a>
                    </div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($services as $service)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="services-item-two">
                        <div class="services-thumb-two">
                            {{ RvMedia::image($service->image, $service->name) }}
                            <div class="item-shape">
                                {{ RvMedia::image(Theme::asset()->url('/imgs/services-item-shape.png'), __('Shape image'), attributes: ['loading' => false]) }}
                            </div>
                        </div>
                        <div class="services-content-two">
                            @if ($iconImage = $service->getMetaData('icon_image', true))
                                <div class="icon">
                                    {{ RvMedia::image($iconImage, $service->name, attributes: ['width' => 32, 'height' => 32, 'loading' => false]) }}
                                </div>
                            @elseif ($icon = $service->getMetaData('icon', true))
                                <div class="icon">
                                    <i class="{{ $icon }}"></i>
                                </div>
                            @endif
                            <h2 class="title"><a href="{{ $service->url }}">{{ $service->name }}</a></h2>
                            @if ($description = $service->description)
                                <p>{!! BaseHelper::clean(Str::limit($description)) !!}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
