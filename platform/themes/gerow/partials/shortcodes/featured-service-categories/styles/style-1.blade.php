<section class="features-area-two pt-80">
    <div class="container">
        <div class="features-item-wrap">
            <div class="row justify-content-center">
                @foreach ($categories as $category)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="features-item-two">
                            @if ($iconImage = $category->image)
                                <div class="features-icon-two">
                                    {{ RvMedia::image($iconImage, $category->name) }}
                                </div>
                            @elseif ($icon = $category->getMetaData('icon', true))
                                <div class="features-icon-two">
                                    <i class="{{ $icon }}"></i>
                                </div>
                            @endif
                            <div class="features-content-two">
                                <h3 class="title">{{ $category->name }}</h3>
                                @if ($description = $category->description)
                                    <p class="truncate-2-custom" title="{{ $description }}">{!! BaseHelper::clean(nl2br($description)) !!}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
