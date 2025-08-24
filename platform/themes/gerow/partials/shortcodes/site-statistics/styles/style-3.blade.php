@php
    if (theme_option('preloader_enabled', true)) {
        Theme::asset()->usePath()->add('aos-css', 'plugins/aos/aos.css');
        Theme::asset()->container('footer')->usePath()->add('aos-js', 'plugins/aos/aos.js');
    }
@endphp

<section class="counter-area-four">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="counter-content-four">
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
            <div class="col-lg-6">
                @if (count($tabs))
                    <div class="counter-item-wrap-four">
                        <ul class="list-wrap">
                            @foreach($tabs as $tab)
                                <li>
                                    <div class="counter-item-three">
                                        @if ($tab['icon'])
                                            <div class="counter-icon">
                                                <i class="{{ $tab['icon'] }}"></i>
                                            </div>
                                        @endif

                                        @if ($tab['data'])
                                            <div class="counter-content">
                                                <h2 class="count"><span class="odometer" data-count="{{ $tab['data'] }}"></span>{{ $tab['unit'] }}</h2>
                                                <p>{!! BaseHelper::clean($tab['title']) !!}</p>
                                            </div>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="inner-counter-shape">
        @if ($bgImage = $shortcode->background_image)
            {{ RvMedia::image($bgImage, $shortcode->title, attributes: ['data-aos' => 'fade-left', 'data-aos-delay' => 0]) }}
        @endif
    </div>
</section>
