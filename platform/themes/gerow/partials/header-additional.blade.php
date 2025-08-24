<div
    class="search-popup-wrap"
    role="dialog"
    aria-hidden="true"
    tabindex="-1"
>
    <div class="search-close">
        <span><i class="fas fa-times"></i></span>
    </div>
    @if(is_plugin_active('blog'))
        <div class="search-wrap text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title">{{ __('Search') }}</h2>
                        <div class="search-form">
                            <form action="{{ route('public.search') }}">
                                <input
                                    name="q"
                                    type="text"
                                    placeholder="{{ __('Enter keyword') }}"
                                >
                                <button
                                    class="search-btn"
                                    type="submit"
                                ><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

<div class="extra-info">
    <div class="close-icon menu-close">
        <button type="button" title="{{ __('Close') }}"><i class="far fa-window-close"></i></button>
    </div>

    @if ($logo = Theme::getLogo())
        <div class="logo-side mb-30">
            <a href="{{ BaseHelper::getHomepageUrl() }}">
                {{ Theme::getLogoImage() }}
            </a>
        </div>
    @endif

    {!! dynamic_sidebar('side_sidebar') !!}

    @if ($languageSwitcher = Theme::partial('language-switcher'))
        <div class="language-switcher-sidebar mb-30 mt-30">
            <ul class="p-0">
                {!! $languageSwitcher !!}
            </ul>
        </div>
    @endif

    @if (theme_option('social_links') && $socialLinks = json_decode(theme_option('social_links'), true))
        <div class="social-icon-right mt-30">
            @foreach ($socialLinks as $social)
                @php($social = collect($social)->pluck('value', 'key'))
                <a
                    href="{{ $social->get('social-url') }}"
                    target="_blank"
                    title="{{ $social->get('social-name') }}"
                >
                    @if($social->get('social-icon-image'))
                        {{ RvMedia::image($social->get('social-icon-image'), 'icon', attributes: ['width' => 18, 'height' => 18, 'style' => 'vertical-align: top; margin-top: 1px;']) }}
                    @elseif($social->get('social-icon'))
                        {!! BaseHelper::renderIcon($social->get('social-icon')) !!}
                    @endif
                </a>
            @endforeach
        </div>
    @endif
</div>
<div class="offcanvas-overly"></div>
