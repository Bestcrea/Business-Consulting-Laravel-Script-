<section class="about-area-six">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="about-img-six">
                    @if ($image = $shortcode->image)
                        {{ RvMedia::image($image, $shortcode->title) }}
                    @endif

                    @if ($bgImage1 = $shortcode->background_image_1)
                        {{ RvMedia::image($bgImage1, $shortcode->title) }}
                    @endif

                    @if ($bgImage2 = $shortcode->background_image_2)
                        {{ RvMedia::image($bgImage2, $shortcode->title) }}
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-six">
                    <div class="section-title section-title-three mb-30 tg-heading-subheading animation-style1">
                        @if ($subtitle = $shortcode->subtitle)
                            <span class="sub-title tg-element-title">{!! BaseHelper::clean($subtitle) !!}</span>
                        @endif

                        @if ($title = $shortcode->title)
                            <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
                        @endif
                    </div>

                    @if ($description = $shortcode->description)
                        <p>{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    @endif

                    @if (count($tabs) > 0)
                        <div class="about-list">
                            <ul class="list-wrap">
                                @foreach($tabs as $tab)
                                    @continue(! $tab['title'])
                                    <li><i class="fas fa-arrow-right"></i>{{ $tab['title'] }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (($buttonLabel = $shortcode->button_label) && ($buttonUrl = $shortcode->button_url))
                        <a href="{{ $buttonUrl }}" class="btn btn-three">{!! BaseHelper::clean($buttonLabel) !!}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
