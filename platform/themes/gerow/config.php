<?php

use Botble\Base\Facades\BaseHelper;
use Botble\Shortcode\View\View;
use Botble\Theme\Theme;

return [
    'inherit' => null,

    'events' => [
        'beforeRenderTheme' => function (Theme $theme): void {
            $version = get_cms_version() . '.3';

            if (BaseHelper::isRtlEnabled()) {
                $theme->asset()->usePath()->add('bootstrap-css', 'plugins/bootstrap/bootstrap.rtl.min.css');
            } else {
                $theme->asset()->usePath()->add('bootstrap-css', 'plugins/bootstrap/bootstrap.min.css');
            }

            $theme->asset()->usePath()->add('default-css', 'css/default.css');
            $theme->asset()->usePath()->add('fontawesome-all-css', 'css/fontawesome-all.min.css');
            $theme->asset()->usePath()->add('flaticon', 'css/flaticon.css');
            $theme->asset()->usePath()->add('swiper-css', 'plugins/swiper/swiper-bundle.min.css');
            $theme->asset()->usePath()->add('slick-css', 'plugins/slick/slick.css');
            $theme->asset()->usePath()->add('magnific-popup-css', 'plugins/magnific-popup/magnific-popup.css');
            $theme->asset()->usePath()->add('odometer-css', 'plugins/odometer/odometer.css');
            $theme->asset()->usePath()->add('style-css', 'css/style.css', version: $version);
            $theme->asset()->usePath()->add('responsive-css', 'css/responsive.css');

            if (BaseHelper::isRtlEnabled()) {
                $theme->asset()->usePath()->add('style-rtl-css', 'css/rtl.css');
            }

            $theme->asset()->container('footer')->usePath()->add('jquery', 'plugins/jquery-3.7.1.min.js');
            $theme->asset()->container('footer')->usePath()->add('boostrap-js', 'plugins/bootstrap/bootstrap.bundle.min.js');
            $theme->asset()->container('footer')->usePath()->add('slick-js', 'plugins/slick/slick.min.js');
            $theme->asset()->container('footer')->usePath()->add('wiper-js', 'plugins/swiper/swiper-bundle.min.js');
            $theme->asset()->container('footer')->usePath()->add('jquery-parallaxScroll-js', 'plugins/jquery.parallaxScroll.min.js');
            $theme->asset()->container('footer')->usePath()->add('wow-js', 'plugins/wow.min.js');
            $theme->asset()->container('footer')->usePath()->add('magnific-popup-js', 'plugins/magnific-popup/jquery.magnific-popup.min.js');
            $theme->asset()->container('footer')->usePath()->add('odometer-js', 'plugins/odometer/jquery.odometer.min.js');
            $theme->asset()->container('footer')->usePath()->add('jquery-appear-js', 'plugins/jquery.appear.js');
            $theme->asset()->container('footer')->usePath()->add('script-js', 'js/script.js', version: $version);
            $theme->asset()->container('footer')->usePath()->add('main-js', 'js/main.js', dependencies: ['countdown'], version: $version);

            if (function_exists('shortcode')) {
                $theme->composer(['page', 'post', 'portfolio.service', 'portfolio.project', 'teams.team'], function (View $view): void {
                    $view->withShortcodes();
                });
            }

            if (theme_option('animation_enabled', '1') == '1' && ! BaseHelper::isRtlEnabled()) {
                $theme->asset()->container('footer')->usePath()->add('ScrollTrigger-js', 'plugins/ScrollTrigger.min.js');
                $theme->asset()->container('footer')->usePath()->add('SplitText-js', 'plugins/SplitText.js');
                $theme->asset()->container('footer')->usePath()->add('gsap-js', 'plugins/gsap.min.js');
                $theme->asset()->container('footer')->usePath()->add('gsap-animation-js', 'js/gsap-animation.js', version: $version);
            }
        },
    ],
];
