<section class="team-area-five pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title section-title-three text-center mb-50 tg-heading-subheading animation-style1">
                    @if ($subtitle = $shortcode->subtitle)
                        <span class="sub-title tg-element-title">{!! BaseHelper::clean($subtitle) !!}</span>
                    @endif

                    @if ($title = $shortcode->title)
                        <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
                    @endif

                    @if ($description = $shortcode->description)
                        <p>{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    @endif
                </div>
            </div>
        </div>
       @if (count($teams) > 0)
            <div class="row justify-content-center">
                @foreach($teams as $team)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                        <div class="team-item-five">
                            <div class="team-thumb-five">
                                {{ RvMedia::image($team->photo, $team->name) }}
                            </div>
                            <div class="team-content-five">
                                <h2 class="title"><a href="{{ $team->url }}">{!! BaseHelper::clean($team->name) !!}</a></h2>
                                @if ($title = $team->title)
                                    <span>{!! BaseHelper::clean($title) !!}</span>
                                @endif
                                <div class="team-social-four">
                                    @if ($socials = $team->socials)
                                        @include(Theme::getThemeNamespace() . '::partials.shortcodes.teams.styles.includes.social-links', ['socials' => $socials])
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
       @endif
    </div>
</section>
