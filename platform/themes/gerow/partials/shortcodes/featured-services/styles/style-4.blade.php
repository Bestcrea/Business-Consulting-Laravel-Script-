<section class="services-area services-bg" @if ($bgImage = $shortcode->background_image) data-background="{{ RvMedia::getImageUrl($bgImage) }}" @endif>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title white-title text-center mb-50 tg-heading-subheading animation-style2">
                    @if ($subtitle = $shortcode->subtitle)
                        <span class="sub-title tg-element-title">{!! BaseHelper::clean($subtitle) !!}</span>
                    @endif

                    @if ($title = $shortcode->title)
                        <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
                    @endif

                    @if ($description = $shortcode->description)
                        <p class="truncate-3-custom" title="{{ $description }}">{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="row services-active">
            @foreach ($services as $service)
                <div class="col-lg-4">
                    <div class="services-item">
                        <div class="services-content">
                            <div class="content-top">
                                @if ($icon = $service->getMetaData('icon', true))
                                    <div class="icon">
                                        <i class="{{ $icon }}"></i>
                                    </div>
                                @endif
                                <h2 class="title">{{ $service->name }}</h2>
                            </div>
                            <div class="services-thumb">
                                @if ($image = $service->image)
                                    {{ RvMedia::image($image, $service->name) }}
                                @endif
                                <a href="{{ $service->url }}" class="btn transparent-btn">{{ __('View Details') }}</a>
                            </div>
                            <p class="truncate-2-custom">
                                @if ($description = $service->description)
                                    {!! BaseHelper::clean(nl2br($description)) !!}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
