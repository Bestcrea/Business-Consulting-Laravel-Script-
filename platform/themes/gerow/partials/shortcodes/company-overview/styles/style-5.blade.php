<section class="about-area-six about-area-twelve">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="about-img-six about-img-twelve">
                    @if ($image = $shortcode->image)
                        {{ RvMedia::image($image, $shortcode->title) }}
                    @endif

                    @if ($bgImage = $shortcode->background_image)
                        {{ RvMedia::image($bgImage, 'shape') }}
                    @endif

                    @if ($bgImage1 = $shortcode->background_image_1)
                        {{ RvMedia::image($bgImage1, 'shape') }}
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-six">
                    <div class="section-title section-title-three mb-30">
                        @if ($subtitle = $shortcode->subtitle)
                            <span class="sub-title">{!! BaseHelper::clean($subtitle) !!}</span>
                        @endif

                        @if ($title = $shortcode->title)
                            <h2 class="title">{!! BaseHelper::clean($title) !!}</h2>
                        @endif
                    </div>

                    @if ($description = $shortcode->description)
                        <p>{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    @endif

                    @if (! empty($tabs))
                        <div class="progress-wrap">
                            @foreach($tabs as $tab)
                                @continue(! $tab['title'] && ! $tab['data'])

                                <div class="progress-item">
                                    @if ($tab['title'])
                                        <h3 class="title">{!! BaseHelper::clean($tab['title']) !!}</h3>
                                    @endif

                                    @if ($tab['data'])
                                        <div class="progress" role="progressbar" aria-label="{{ $tab['title'] }}" aria-valuenow="{{ $tab['data'] }}" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <div class="progress-bar wow slideInLeft" data-wow-delay=".1s" style="width: {{ $tab['data'] }}%"><span>{{ $tab['data'] }}%</span></div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
