<section class="features-area-seven">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="features-content-seven">
                    <div class="section-title-two mb-30">
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
                </div>
            </div>
            @if (! empty($tabs))
                <div class="col-lg-6">
                    <div class="features-progress-wrap">
                        <div class="progress-wrap">
                            @foreach($tabs as $tab)
                                @continue(! $tab['title'] && ! $tab['data'])

                                <div class="progress-item">
                                    @if ($tab['title'])
                                        <h3 class="title">{!! BaseHelper::clean($tab['title']) !!}</h3>
                                    @endif

                                    @if ($tab['data'])
                                        <div class="progress" role="progressbar" aria-label="{{ $tab['title'] }}" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar wow slideInLeft" data-wow-delay=".1s" style="width: {{ $tab['data'] }}%"><span>{{ $tab['data'] }}%</span></div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="inner-features-shape">
        @if ($bgImage = $shortcode->background_image)
            {{ RvMedia::image($bgImage, $shortcode->title, attributes: ['data-aos' => 'fade-left', 'data-aos-delay' => '0']) }}
        @endif
    </div>
</section>
