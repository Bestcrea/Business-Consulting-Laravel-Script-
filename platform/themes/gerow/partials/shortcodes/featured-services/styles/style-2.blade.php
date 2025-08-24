<section class="project-area-three pb-90">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-8">
                <div class="section-title-two mb-40 tg-heading-subheading animation-style1">
                    @if ($subtitle = $shortcode->subtitle)
                        <span class="sub-title tg-element-title">{!! BaseHelper::clean($subtitle) !!}</span>
                    @endif

                    @if ($title = $shortcode->title)
                        <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
                    @endif
                </div>
            </div>
            <div class="col-lg-7 col-md-4">
                @if (($buttonLabel = $shortcode->button_label) && ($buttonUrl = $shortcode->button_url))
                    <div class="view-all-btn text-end mb-30">
                        <a
                            class="btn"
                            href="{{ $buttonUrl }}"
                        >
                            {!! BaseHelper::clean($buttonLabel) !!}
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
    @if ($services->isNotEmpty())
        <div class="container custom-container-three">
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="project-item-three">
                            <div class="project-thumb-three">
                                <a href="{{ $service->url }}">
                                    {{ RvMedia::image($service->image, $service->name, 'medium') }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</section>
