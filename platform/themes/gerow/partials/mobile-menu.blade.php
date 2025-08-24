<div class="mobile-menu">
    <nav class="menu-box">
        <div class="close-btn"><i class="fas fa-times"></i></div>
        @if ($logo = Theme::getLogo())
            <div class="nav-logo">
                <a href="{{ BaseHelper::getHomepageUrl() }}">
                    {{ Theme::getLogoImage() }}
                </a>
            </div>
        @endif
        @if(is_plugin_active('blog'))
            <div class="mobile-search">
                <form action="{{ route('public.search') }}">
                    <input
                        name="q"
                        type="text"
                        placeholder="{{ __('Enter keyword') }}"
                        value="{{ BaseHelper::stringify(request()->query('q')) }}"
                    >
                    <button type="submit" title="{{ __('Search') }}"><i class="flaticon-search"></i></button>
                </form>
            </div>
        @endif

        <div class="menu-title mb-20">
            <span>{{ __('Menu') }}</span>
        </div>
        <div class="menu-outer">
        </div>

        @if (is_plugin_active('language') && count(Language::getSupportedLocales()) > 1)
            <div class="menu-title mt-10 mb-20">
                <span>{{ __('Language') }}</span>
            </div>
            <div>
                <ul class="navigation">
                    {!! Theme::partial('language-switcher') !!}
                </ul>
            </div>
        @endif
        @if (theme_option('social_links') && $socialLinks = json_decode(theme_option('social_links'), true))
            <div class="social-links">
                <ul class="clearfix list-wrap">
                    @foreach ($socialLinks as $social)
                        @php($social = collect($social)->pluck('value', 'key'))
                        <li>
                            <a href="{{ $social->get('social-url') }}" target="_blank" title="{{ $social->get('social-name') }}">
                                @if($social->get('social-icon-image'))
                                    {{ RvMedia::image($social->get('social-icon-image'), 'icon', attributes: ['width' => 18, 'height' => 18, 'style' => 'vertical-align: top; margin-top: 1px;']) }}
                                @elseif($social->get('social-icon'))
                                    {!! BaseHelper::renderIcon($social->get('social-icon')) !!}
                                @endif
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </nav>
</div>
<div class="menu-backdrop"></div>
