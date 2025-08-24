<section
    class="services-area-six inner-services-bg"
    @if ($bgImage = $shortcode->background_image) data-background="{{ RvMedia::getImageUrl($bgImage) }}" style="background-image: url({{ RvMedia::getImageUrl($bgImage) }});"
         @else
             style="background-color: {{ $shortcode->background_color }};" @endif
>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-title-two mb-60">
                    @if ($badge = $shortcode->badge)
                        <span class="sub-title">{{ $badge }}</span>
                    @endif

                    @if ($title = $shortcode->title)
                        <h2 class="title">{!! BaseHelper::clean($title) !!}</h2>
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                @if ($description = $shortcode->description)
                    <div class="section-top-content mb-30">
                        <p>{!! BaseHelper::clean(nl2br($description)) !!}</p>
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
                            @if ($shapeImage = $shortcode->shape_image)
                                <div class="item-shape">
                                    {{ RvMedia::image($shapeImage, $service->name) }}
                                </div>
                            @endif
                        </div>

                        <div class="services-content-two">
                            @if ($iconImage = $service->getMetaData('icon_image', true))
                                <div class="icon">
                                    {{ RvMedia::image($iconImage, $service->name) }}
                                </div>
                            @elseif ($icon = $service->getMetaData('icon', true))
                                <div class="icon">
                                    <i class="{{ $icon }}"></i>
                                </div>
                            @endif
                            <h2 class="title"><a href="{{ $service->url }}">{{ $service->name }}</a></h2>
                            <p>{!! BaseHelper::clean(Str::limit($service->description, 80)) !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
