<section
    class="team-area team-bg"
    @if ($bgImage = $shortcode->background_image) data-background="{{ RvMedia::getImageUrl($bgImage) }}" @endif
>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-50">
                    @if ($subtitle = $shortcode->subtitle)
                        <span class="sub-title">{!! BaseHelper::clean($subtitle) !!}</span>
                    @endif

                    @if ($title = $shortcode->title)
                        <h2 class="title">{!! BaseHelper::clean($title) !!}</h2>
                    @endif

                    @if ($description = $shortcode->description)
                        <p>{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    @endif
                </div>
            </div>
        </div>
        @if (count($teams) > 0)
            <div class="row justify-content-center">
                @foreach ($teams as $team)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9">
                        <div class="team-item">
                            <div class="team-thumb">
                                {{ RvMedia::image($team->photo, $team->name) }}
                                <div class="team-social">
                                    @if ($socials = $team->socials)
                                        @include(Theme::getThemeNamespace() . '::partials.shortcodes.teams.styles.includes.social-links', ['socials' => $socials])
                                    @endif
                                </div>
                            </div>
                            <div class="team-content">
                                <h2 class="title"><a href="{{ $team->url }}">{{ $team->name }}</a></h2>
                                @if ($title = $team->title)
                                    <span>{!! BaseHelper::clean($title) !!}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
