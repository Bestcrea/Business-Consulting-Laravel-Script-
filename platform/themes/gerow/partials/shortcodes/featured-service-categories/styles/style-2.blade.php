<section class="features-area-three">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7">
                <div class="section-title-two text-center mb-40 tg-heading-subheading animation-style1">
                    @if ($subtitle = $shortcode->subtitle)
                        <span class="sub-title tg-element-title">{!! BaseHelper::clean($subtitle) !!}</span>
                    @endif

                    @if ($title = $shortcode->title)
                        <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
                    @endif
                </div>
            </div>
        </div>
        @if ($categories->isNotEmpty())
            <div class="features-item-wrap-two">
                <div class="row justify-content-center">
                    @foreach ($categories as $category)
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="features-item-three">
                                @if ($iconImage = $category->image)
                                    <div class="features-icon-three">
                                        {{ RvMedia::image($iconImage, $category->name) }}
                                    </div>
                                @elseif ($icon = $category->getMetaData('icon', true))
                                    <div class="features-icon-three">
                                        <i class="{{ $icon }}"></i>
                                    </div>
                                @endif
                                <div class="features-content-three">
                                    <h2 class="title">{{ $category->name }}</h2>
                                    @if ($description = $category->description)
                                        <p class="truncate-3-custom" title="{{ $description }}">{!! BaseHelper::clean(nl2br($description)) !!}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>
