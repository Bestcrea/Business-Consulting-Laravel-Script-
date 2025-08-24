<section class="features-area">
    <div class="container">
        <div class="row justify-content-center">

            @foreach ($categories as $category)
                <div class="col-lg-4 col-md-6">
                    <div class="features-item">
                        <div class="features-content">
                            <div class="content-top">
                                @if ($iconImage = $category->image)
                                    <div class="icon">
                                        {{ RvMedia::image($iconImage, $category->name) }}
                                    </div>
                                @elseif ($icon = $category->getMetaData('icon', true))
                                    <div class="icon">
                                        <i class="{{ $icon }}"></i>
                                    </div>
                                @endif
                                <h2 class="title">{{ $category->name }}</h2>
                            </div>

                            @if ($description = $category->description)
                                <p class="truncate-2-custom" title="{{ $description }}">{!! BaseHelper::clean(nl2br($description)) !!}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
