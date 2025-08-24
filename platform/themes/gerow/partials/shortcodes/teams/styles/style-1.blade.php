@php
    if (theme_option('preloader_enabled', true)) {
        Theme::asset()->usePath()->add('aos-css', 'plugins/aos/aos.css');
        Theme::asset()->container('footer')->usePath()->add('aos-js', 'plugins/aos/aos.js');
    }
@endphp

<section class="team-area-two">
    @if ($bgImage = $shortcode->background_image)
        <div class="team-shape">
            {{ RvMedia::image($bgImage, $shortcode->title, attributes: ['data-aos' => 'fade-right', 'data-aos-delay' => '200']) }}
        </div>
    @endif
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="section-title-two mb-45 tg-heading-subheading animation-style3">
                    @if ($subtitle = $shortcode->subtitle)
                        <span class="sub-title">{!! BaseHelper::clean($subtitle) !!}</span>
                    @endif

                    @if ($title = $shortcode->title)
                        <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
                    @endif
                </div>
            </div>

            @if ($description = $shortcode->description)
                <div class="col-lg-6 col-md-10">
                    <div class="section-top-content mb-30">
                        <p>{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    </div>
                </div>
            @endif
        </div>
        <div class="row justify-content-center">
            @foreach ($teams as $team)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="team-item-two">
                        <div class="team-thumb-two">
                            <a href="{{ $team->url }}">
                                {{ RvMedia::image($team->photo, $team->name) }}
                            </a>
                            @if ($socials = $team->socials)
                                <div class="team-social-two">
                                    @include(Theme::getThemeNamespace() . '::partials.shortcodes.teams.styles.includes.social-links', ['socials' => $socials])
                                </div>
                            @endif
                        </div>
                        <div class="team-content-two">
                            <h2 class="title"><a href="{{ $team->url }}">{{ $team->name }}</a></h2>
                            <span>{{ $team->title }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
