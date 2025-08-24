<section
    class="features-area-five features-bg"
    @if ($bgImage = $shortcode->background_image) data-background="{{ RvMedia::getImageUrl($bgImage) }}" @endif
>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6">
                <div class="section-title text-center mb-50">
                    @if ($subtitle = $shortcode->subtitle)
                        <span class="sub-title">{!! BaseHelper::clean($subtitle) !!}</span>
                    @endif

                    @if ($title = $shortcode->title)
                        <h2 class="title">{!! BaseHelper::clean($title) !!}</h2>
                    @endif
                </div>
            </div>
        </div>
        @if ($categories->isNotEmpty())
            <div class="row justify-content-center">
                @foreach ($categories as $category)
                    <div class="col-lg-4 col-md-6">
                        <div class="features-item">
                            <div class="features-content">
                                <div class="content-top">
                                    @if ($iconImage = $category->image)
                                        <div class="icon">
                                            <a href="{{ $category->url }}">
                                                {{ RvMedia::image($iconImage, $category->name) }}
                                            </a>
                                        </div>
                                    @elseif ($icon = $category->getMetaData('icon', true))
                                        <div class="icon">
                                            <i class="{{ $icon }}"></i>
                                        </div>
                                    @endif
                                    <a href="{{ $category->url }}">
                                        <h2 class="title">{{ $category->name }}</h2>
                                    </a>
                                </div>
                                @if ($description = $category->description)
                                    <p class="truncate-2-custom" title="{{ $description }}">{!! BaseHelper::clean(nl2br($description)) !!}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    <div class="features-shape-wrap">
        @if ($bgImage1 = $shortcode->background_image_1)
            {{ RvMedia::image($bgImage1, $shortcode->title) }}
        @endif

        @if ($bgImage2 = $shortcode->background_image_2)
            {{ RvMedia::image($bgImage2, $shortcode->title) }}
        @endif
    </div>
</section>
