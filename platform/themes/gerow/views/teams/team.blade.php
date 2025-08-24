@php
    Theme::set('pageTitle', $team->name);
    Theme::set('headerStyle', theme_option('header_style', 'style-1'));
    Theme::set('headerTopStyle',theme_option('header_top_sidebar_style', 'style-1'));
@endphp

<section class="team-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="team-details-info-wrap">
                    @if ($photo = $team->photo)
                        <div class="team-details-thumb">
                            {{ RvMedia::image($photo, $team->name ?: $team->title) }}
                        </div>
                    @endif
                    <div class="team-details-info">
                        <ul class="list-wrap">
                            @if ($phone = $team->phone)
                                <li>
                                    <i class="flaticon-phone-call"></i>
                                    <a
                                        href="tel:{{ $phone }}"
                                        dir="ltr"
                                    >
                                        {{ $phone }}
                                    </a>
                                </li>
                            @endif

                            @if ($email = $team->email)
                                <li>
                                    <i class="flaticon-mail"></i>
                                    <a
                                        href="mailto:{{ $email }}"
                                        dir="ltr"
                                    >
                                        {{ $email }}
                                    </a>
                                </li>
                            @endif

                            @if ($address = $team->address)
                                <li><i class="flaticon-location"></i>{{ $address }}</li>
                            @endif
                        </ul>
                        @if ($email)
                            <div class="td-info-bottom mb-30">
                                <a
                                    class="btn btn-three"
                                    href="mailto:{{ $email }}"
                                    title="{{ __('Send an email to :email', ['email' => $email]) }}"
                                >{{ __('Get In Touch') }}</a>
                            </div>
                            @if ($socials = $team->socials)
                                <div class="team-social-three">
                                    <div class="social-toggle-icon">
                                        <i class="fas fa-share-alt"></i>
                                    </div>
                                    @include(Theme::getThemeNamespace() . '::partials.shortcodes.teams.styles.includes.social-links', ['socials' => $socials])
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="team-details-content">
                    <h2 class="title">{{ $team->name }}</h2>
                    @if ($title = $team->title)
                        <span>{{ $title }}</span>
                    @endif

                    @if ($description = $team->description)
                        <p>{{ $description }}</p>
                    @endif

                    {!! BaseHelper::clean($team->content) !!}
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    {!! dynamic_sidebar('service_detail_bottom_sidebar') !!}
</section>
