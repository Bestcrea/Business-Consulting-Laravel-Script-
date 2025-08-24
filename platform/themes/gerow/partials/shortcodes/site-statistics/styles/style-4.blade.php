<section class="counter-area counter-bg" @if ($backgroundImage = $shortcode->background_image) data-background="{{ RvMedia::getImageUrl($backgroundImage) }}" @endif>
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($tabs as $tab)
                @continue(! $tab['data'])
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="counter-item">
                        <h2 class="count"><span class="odometer" data-count="{{ $tab['data'] }}"></span>{{ $tab['unit'] }}</h2>
                        @if ($tab['title'])
                            <p>{!! BaseHelper::clean($tab['title']) !!}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @if ($shortcode->background_image_1 || $shortcode->background_image_2)
        <div class="counter-shape-wrap">
            @if ($backgroundImage1 = $shortcode->background_image_1)
                {{ RvMedia::image($backgroundImage1, 'shape', attributes: ['class' => 'animationFramesOne']) }}
            @endif

            @if ($backgroundImage2 = $shortcode->background_image_2)
                {{ RvMedia::image($backgroundImage2, 'shape', attributes: ['class' => 'animationFramesOne']) }}
            @endif
        </div>
    @endif
</section>
