@php
    $page->loadMissing('metadata');

    Theme::set('pageTitle', $page->name);
    Theme::set('headerStyle', $page->getMetaData('header_style', true) ?: theme_option('header_style', 'style-1'));
    Theme::set('headerTopSideBarStyle', $page->getMetaData('header_top_sidebar_style', true) ?: theme_option('header_top_sidebar_style', 'style-1'));
    Theme::set('preFooterSidebarStyle', $page->getMetaData('pre_footer_sidebar_style', true) ?: 'style-1');
    Theme::set('footerStyle', $page->getMetaData('footer_style', true) ?: null);
    Theme::set('bottomFooterStyle', $page->getMetaData('bottom_footer_style', true) ?: null);

    if ($breadcrumbBackgroundImage = $page->getMetaData('breadcrumb_background_image', true)) {
        Theme::set('breadcrumbBackgroundImage', RvMedia::getImageUrl($breadcrumbBackgroundImage));
    }

    Theme::set('breadcrumbBackgroundImageOverlayEnabled', $page->getMetaData('breadcrumb_background_image_overlay_enabled', 'yes'));

    if ($page->getMetaData('customize_footer', true) === 'custom') {
        if ($footerBackgroundColor = $page->getMetaData('footer_background_color', true)) {
            Theme::set('footerBackgroundColor', $footerBackgroundColor);
        }
        if ($footerBackgroundImage = $page->getMetaData('footer_background_image', true)) {
            Theme::set('footerBackgroundImage', $footerBackgroundImage);
        }
        if ($footerBorderColor = $page->getMetaData('footer_border_color', true)) {
            Theme::set('footerBorderColor', $footerBorderColor);
        }
        if ($footerTextColor = $page->getMetaData('footer_text_color', true)) {
            Theme::set('footerTextColor', $footerTextColor);
        }
        if ($footerTextMutedColor = $page->getMetaData('footer_text_muted_color', true)) {
            Theme::set('footerTextMutedColor', $footerTextMutedColor);
        }
        if ($footerLogo = $page->getMetaData('footer_logo', true)) {
            Theme::set('footerLogo', $footerLogo);
        }
    } else {
        Theme::set('footerBackgroundImage', theme_option('footer_background_image'));
    }
@endphp

<main class="main">
    {!! apply_filters(
        PAGE_FILTER_FRONT_PAGE_CONTENT,
        Html::tag('div', BaseHelper::clean($page->content), ['class' => 'ck-content'])->toHtml(),
        $page,
    ) !!}
</main>
