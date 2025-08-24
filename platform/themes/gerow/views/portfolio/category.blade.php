@php
    Theme::set('pageTitle', $category->name);
    Theme::set('headerStyle', theme_option('header_style', 'style-1'));
    Theme::set('headerTopStyle',theme_option('header_top_sidebar_style', 'style-1'));
@endphp

<section class="services-area-five inner-services-bg pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="section-title-two text-center mb-50">
                    @if ($description = $category->description)
                        <p>{{ $description }}</p>
                    @endif
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            @foreach ($category->services as $service)
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="services-item">
                        <div class="services-content">
                            <div class="content-top">
                                @if ($iconImage = $service->getMetaData('icon_image', true))
                                    <div class="icon">
                                        {{ RvMedia::image($iconImage, $service->name, attributes: ['loading' => false]) }}
                                    </div>
                                @elseif ($icon = $service->getMetaData('icon', true))
                                    <div class="icon">
                                        <i class="{{ $icon }}"></i>
                                    </div>
                                @endif
                                <h2 class="title">{{ $service->name }}</h2>
                            </div>
                            <div class="services-thumb services-list-style-1">
                                @if ($image = $service->image)
                                    {{ RvMedia::image($image, $service->name, attributes: ['loading' => false]) }}
                                @endif
                                <a
                                    class="btn transparent-btn"
                                    href="{{ $service->url }}"
                                >{{ __('VIEW DETAILS') }}</a>
                            </div>
                            <p class="truncate-2-custom mb-0">
                                {!! BaseHelper::clean($service->description) !!}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
