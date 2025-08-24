@switch(Theme::get('preFooterSidebarStyle'))
    @case('style-1')
        {!! dynamic_sidebar('pre_footer_sidebar') !!}
    @break

    @case('style-2')
        {!! dynamic_sidebar('pre_footer_sidebar_1') !!}
    @break
@endswitch

<footer>
    <div class="footer-area-two footer-bg-two footer-style"
         @if ($bgFooter = Theme::get('footerBackgroundImage'))
             data-background="{{ RvMedia::getImageUrl($bgFooter) }}"
         @elseif ($bgFooter = theme_option('footer_background_image'))
             data-background="{{ RvMedia::getImageUrl($bgFooter) }}"
         @endif

         style="
            background-color: {{ Theme::get('footerBackgroundColor') ?: theme_option('footer_background_color', '#F8F8F8') }};
            --footer-text-color: {{ Theme::get('footerTextColor') ?: theme_option('footer_text_color', '#000000') }};
            --footer-text-muted-color: {{ Theme::get('footerTextMutedColor') ?: theme_option('footer_text_muted_color', '#777777') }};
            --footer-border-color: {{ Theme::get('footerBorderColor') ?: theme_option('footer_border_color', '#E0E0E0') }};
        "
    >
        <div class="footer-top-two">
            <div class="container">
                <div class="row">
                    @if (Theme::get('footerStyle', 'default') == 'default')
                        {!! dynamic_sidebar('footer_sidebar') !!}
                    @else
                        {!! dynamic_sidebar('footer_sidebar_style_1') !!}
                    @endif
                </div>
            </div>
        </div>
        @if (Theme::get('bottomFooterStyle', 'default') == 'default')
            {!! dynamic_sidebar('footer_bottom') !!}
        @else
            <div class="footer-bottom container">
                <div class="row align-items-center">
                    {!! dynamic_sidebar('footer_bottom_style_1') !!}
                </div>
            </div>
        @endif
    </div>
</footer>

{!! Theme::footer() !!}
