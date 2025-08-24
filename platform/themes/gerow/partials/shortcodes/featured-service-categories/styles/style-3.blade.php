@if ($categories->isNotEmpty())
    <section class="features-area-four">
        <div class="container">
            <div class="features-item-wrap-four">
                <div class="row justify-content-center">
                    @foreach ($categories as $category)
                        <div class="col-lg-4 col-md-6">
                            <div class="features-item-four">
                                @if ($iconImage = $category->image)
                                    <div class="features-icon-four">
                                        {{ RvMedia::image($iconImage, $category->name) }}
                                    </div>
                                @elseif ($icon = $category->getMetaData('icon', true))
                                    <div class="features-icon-four">
                                        <i class="{{ $icon }}"></i>
                                    </div>
                                @endif
                                <div class="features-content-four">
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
@endif
