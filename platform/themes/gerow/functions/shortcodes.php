<?php

use Botble\Base\Forms\FieldOptions\MediaImageFieldOption;
use Botble\Base\Forms\FieldOptions\OnOffFieldOption;
use Botble\Base\Forms\FieldOptions\TextareaFieldOption;
use Botble\Base\Forms\FieldOptions\TextFieldOption;
use Botble\Base\Forms\Fields\MediaImageField;
use Botble\Base\Forms\Fields\OnOffField;
use Botble\Base\Forms\Fields\TextareaField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Faq\Models\FaqCategory;
use Botble\Newsletter\Forms\Fronts\NewsletterForm;
use Botble\Shortcode\Compilers\Shortcode as ShortcodeCompiler;
use Botble\Shortcode\Facades\Shortcode;
use Botble\Shortcode\Forms\ShortcodeForm;
use Botble\Theme\Facades\Theme;
use Botble\Theme\Supports\Youtube;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\HasMany;

app()->booted(function (): void {
    Shortcode::register('hero-banner', __('Hero banner'), __('Hero banner'), function (ShortcodeCompiler $shortcode): ?string {
        $shortcode->video_url = $shortcode->youtube_url;

        if (Youtube::isYoutubeURL($shortcode->youtube_url)) {
            $shortcode->video_url = 'https://www.youtube.com/watch?v=' . Youtube::getYoutubeVideoID($shortcode->youtube_url);
        }

        if (theme_option('preloader_enabled', true)) {
            Theme::asset()->usePath()->add('aos-css', 'plugins/aos/aos.css');
            Theme::asset()->container('footer')->usePath()->add('aos-js', 'plugins/aos/aos.js');
        }

        return Theme::partial('shortcodes.hero-banner.index', compact('shortcode'));
    });

    Shortcode::setAdminConfig('hero-banner', function (array $attributes): ?string {
        return Theme::partial('shortcodes.hero-banner.admin', compact('attributes'));
    });

    Shortcode::register('hero-banner-slider', __('Hero banner slider'), __('Hero banner slider'), function (ShortcodeCompiler $shortcode): ?string {
        $shortcode->video_url = $shortcode->youtube_url;

        if (Youtube::isYoutubeURL($shortcode->youtube_url)) {
            $shortcode->video_url = 'https://www.youtube.com/watch?v=' . Youtube::getYoutubeVideoID($shortcode->youtube_url);
        }

        return Theme::partial('shortcodes.hero-banner-slider.index', compact('shortcode'));
    });

    Shortcode::setAdminConfig('hero-banner-slider', function (array $attributes): ?string {
        return Theme::partial('shortcodes.hero-banner-slider.admin', compact('attributes'));
    });

    Shortcode::register('about-us-information', __('About us information'), __('About us information'), function (ShortcodeCompiler $shortcode): ?string {
        $tabs = Shortcode::fields()->getTabsData(['title', 'icon', 'icon_image', 'description', 'data', 'unit'], $shortcode);

        $shortcode->video_url = $shortcode->youtube_url;

        if (Youtube::isYoutubeURL($shortcode->youtube_url)) {
            $shortcode->video_url = 'https://www.youtube.com/watch?v=' . Youtube::getYoutubeVideoID($shortcode->youtube_url);
        }

        if ($foundedYear = $shortcode->founded_year) {
            $shortcode->company_age = Carbon::now()->year - (int)$foundedYear;
        }

        return Theme::partial('shortcodes.about-us-information.index', compact('shortcode', 'tabs'));
    });

    Shortcode::setAdminConfig('about-us-information', function (array $attributes): ?string {
        return Theme::partial('shortcodes.about-us-information.admin', compact('attributes'));
    });

    Shortcode::register('why-choose-us', __('Why choose us'), __('Why choose us'), function (ShortcodeCompiler $shortcode): ?string {
        $tabs = Shortcode::fields()->getTabsData(['title', 'data', 'unit'], $shortcode);

        Theme::asset()->container('footer')->usePath()->add('jquery-easypiechart-js', 'plugins/jquery.easypiechart.min.js');
        Theme::asset()->container('footer')->usePath()->add('jquery-inview-js', 'plugins/jquery.inview.min.js');

        return Theme::partial('shortcodes.why-choose-us.index', compact('shortcode', 'tabs'));
    });

    Shortcode::setAdminConfig('why-choose-us', function (array $attributes): ?string {
        return Theme::partial('shortcodes.why-choose-us.admin', compact('attributes'));
    });

    Shortcode::register('brands', __('Brands'), __('Brands'), function (ShortcodeCompiler $shortcode): ?string {
        $tabs = Shortcode::fields()->getTabsData(['name', 'image', 'link'], $shortcode);

        return Theme::partial('shortcodes.brands.index', compact('shortcode', 'tabs'));
    });

    Shortcode::setAdminConfig('brands', function (array $attributes): ?string {
        return Theme::partial('shortcodes.brands.admin', compact('attributes'));
    });

    Shortcode::register('site-statistics', __('Site statistics'), __('Site statistics'), function (ShortcodeCompiler $shortcode): ?string {
        $tabs = Shortcode::fields()->getTabsData(['title', 'icon_image', 'icon', 'data', 'unit'], $shortcode);

        return Theme::partial('shortcodes.site-statistics.index', compact('shortcode', 'tabs'));
    });

    Shortcode::setAdminConfig('site-statistics', function (array $attributes): ?string {
        return Theme::partial('shortcodes.site-statistics.admin', compact('attributes'));
    });

    Shortcode::register('company-overview', __('Company overview'), __('Company overview'), function (ShortcodeCompiler $shortcode): ?string {
        $tabs = Shortcode::fields()->getTabsData(['title', 'description', 'logo_image', 'logo', 'data', 'unit'], $shortcode);

        return Theme::partial('shortcodes.company-overview.index', compact('shortcode', 'tabs'));
    });

    Shortcode::setAdminConfig('company-overview', function (array $attributes): ?string {
        return Theme::partial('shortcodes.company-overview.admin', compact('attributes'));
    });

    Shortcode::register('intro-video', __('Intro video'), __('Intro video'), function (ShortcodeCompiler $shortcode): ?string {
        $tabs = Shortcode::fields()->getTabsData(['title', 'percent'], $shortcode);

        $shortcode->video_url = $shortcode->youtube_video_url;

        if (Youtube::isYoutubeURL($shortcode->youtube_video_url)) {
            $shortcode->video_url = 'https://www.youtube.com/watch?v=' . Youtube::getYoutubeVideoID($shortcode->youtube_video_url);
        }

        Theme::asset()->usePath()->add('jarallax-css', 'plugins/jarallax/jarallax.css');
        Theme::asset()->container('footer')->usePath()->add('jarallax-js', 'plugins/jarallax/jarallax.min.js');

        return Theme::partial('shortcodes.intro-video.index', compact('shortcode', 'tabs'));
    });

    Shortcode::setAdminConfig('intro-video', function (array $attributes): ?string {
        return Theme::partial('shortcodes.intro-video.admin', compact('attributes'));
    });

    Shortcode::register('contact-block', __('Contact block'), __('Contact block'), function (ShortcodeCompiler $shortcode): ?string {
        return Theme::partial('shortcodes.contact-block.index', compact('shortcode'));
    });

    Shortcode::setAdminConfig('contact-block', function (array $attributes): ?string {
        return Theme::partial('shortcodes.contact-block.admin', compact('attributes'));
    });

    Shortcode::register('branch-offices', __('Branch offices'), __('Branch offices'), function (ShortcodeCompiler $shortcode): ?string {
        $tabs = Shortcode::fields()->getTabsData(['title', 'address', 'phone', 'email'], $shortcode);

        return Theme::partial('shortcodes.branch-offices.index', compact('shortcode', 'tabs'));
    });

    Shortcode::setAdminConfig('branch-offices', function (array $attributes): ?string {
        return Theme::partial('shortcodes.branch-offices.admin', compact('attributes'));
    });

    Shortcode::register('google-map', __('Google Maps'), __('Google Maps'), function (ShortcodeCompiler $shortcode): ?string {
        return Theme::partial('shortcodes.google-map.index', compact('shortcode'));
    });

    Shortcode::setAdminConfig('google-map', function (array $attributes): ?string {
        return Theme::partial('shortcodes.google-map.admin', compact('attributes'));
    });

    Shortcode::register('content-collapse', __('Content collapse'), __('Content collapse'), function (ShortcodeCompiler $shortcode): ?string {
        $tabs = Shortcode::fields()->getTabsData(['title', 'description'], $shortcode);

        return Theme::partial('shortcodes.content-collapse.index', compact('shortcode', 'tabs'));
    });

    Shortcode::setAdminConfig('content-collapse', function (array $attributes): ?string {
        return Theme::partial('shortcodes.content-collapse.admin', compact('attributes'));
    });

    Shortcode::register('content-rich-fields', __('Content rich fields'), __('Content rich fields'), function (ShortcodeCompiler $shortcode): ?string {
        $tabs = Shortcode::fields()->getTabsData(['title', 'description', 'icon_image', 'icon'], $shortcode);

        return Theme::partial('shortcodes.content-rich-fields.index', compact('shortcode', 'tabs'));
    });

    Shortcode::setAdminConfig('content-rich-fields', function (array $attributes): ?string {
        return Theme::partial('shortcodes.content-rich-fields.admin', compact('attributes'));
    });

    Shortcode::register('featured-specialty', __('Featured specialty'), __('Featured specialty'), function (ShortcodeCompiler $shortcode): ?string {
        $tabs = Shortcode::fields()->getTabsData(['title', 'description'], $shortcode);

        return Theme::partial('shortcodes.featured-specialty.index', compact('shortcode', 'tabs'));
    });

    Shortcode::setAdminConfig('featured-specialty', function (array $attributes): ?string {
        return Theme::partial('shortcodes.featured-specialty.admin', compact('attributes'));
    });

    if (is_plugin_active('contact')) {
        add_filter(CONTACT_FORM_TEMPLATE_VIEW, function () {
            return Theme::getThemeNamespace('partials.shortcodes.contact-form.index');
        }, 120);

        Shortcode::modifyAdminConfig('contact-form', function (ShortcodeForm $form) {
            return $form
                ->add(
                    'title',
                    TextField::class,
                    TextFieldOption::make()
                        ->label(__('Title'))
                        ->toArray()
                )
                ->add(
                    'subtitle',
                    TextField::class,
                    TextFieldOption::make()
                        ->label(__('Subtitle'))
                        ->toArray()
                )
                ->add(
                    'description',
                    TextareaField::class,
                    TextareaFieldOption::make()
                        ->label(__('Description'))
                        ->toArray()
                )
                ->add(
                    'button_label',
                    TextField::class,
                    TextFieldOption::make()
                        ->label(__('Button label'))
                        ->toArray()
                )
                ->add(
                    'button_url',
                    TextField::class,
                    TextFieldOption::make()
                        ->label(__('Button URL'))
                        ->toArray()
                )
                ->add(
                    'background_image',
                    MediaImageField::class,
                    MediaImageFieldOption::make()
                        ->label(__('Background image'))
                        ->toArray()
                )
                ->add(
                    'background_image_1',
                    MediaImageField::class,
                    MediaImageFieldOption::make()
                        ->label(__('Background image :number', ['number' => 1]))
                        ->toArray()
                );
        });
    }

    if (is_plugin_active('faq')) {
        Shortcode::register('faqs', __('FAQs'), __('FAQs'), function (ShortcodeCompiler $shortcode): ?string {
            $categoryIds = Shortcode::fields()->getIds('category_ids', $shortcode);

            if (empty($categoryIds)) {
                return null;
            }

            $categories = FaqCategory::query()
                ->wherePublished()
                ->whereIn('id', $categoryIds)
                ->with('faqs', fn (HasMany $query) => $query->wherePublished())
                ->get();

            return Theme::partial('shortcodes.faqs.index', compact('shortcode', 'categories'));
        });

        Shortcode::setAdminConfig('faqs', function (array $attributes): ?string {
            $categories = FaqCategory::query()
                ->pluck('name', 'id')
                ->all();

            return Theme::partial('shortcodes.faqs.admin', compact('attributes', 'categories'));
        });
    }

    Shortcode::register('coming-soon', __('Coming Soon'), __('Coming Soon'), function (ShortcodeCompiler $shortcode): string {
        try {
            $countdownTime = Carbon::parse($shortcode->countdown_time);
        } catch (Exception) {
            $countdownTime = null;
        }

        $form = null;

        if (is_plugin_active('newsletter')) {
            $form = NewsletterForm::create();
        }

        Theme::asset()->container('footer')->usePath()->add('countdown', 'plugins/jquery.countdown.min.js');

        return Theme::partial('shortcodes.coming-soon.index', compact('shortcode', 'countdownTime', 'form'));
    });

    Shortcode::setAdminConfig('coming-soon', function (array $attributes): ShortcodeForm {
        return ShortcodeForm::createFromArray($attributes)
            ->add(
                'title',
                TextField::class,
                TextFieldOption::make()
                    ->label(__('Title'))
                    ->toArray()
            )
            ->add(
                'countdown_time',
                'datetime',
                [
                    'label' => __('Countdown time'),
                    'default_value' => Carbon::now()->addDays(7)->format('Y-m-d H:i'),
                ]
            )
            ->add(
                'address',
                TextField::class,
                TextFieldOption::make()
                    ->label(__('Address'))
                    ->toArray()
            )
            ->add(
                'hotline',
                TextField::class,
                TextFieldOption::make()
                    ->label(__('Hotline'))
                    ->toArray()
            )
            ->add(
                'business_hours',
                TextField::class,
                TextFieldOption::make()
                    ->label(__('Bussiness hours'))
                    ->toArray()
            )
            ->add(
                'show_social_links',
                OnOffField::class,
                OnOffFieldOption::make()
                    ->label(__('Show social links'))
                    ->defaultValue(true)
                    ->toArray()
            )
            ->add(
                'image',
                MediaImageField::class,
                MediaImageFieldOption::make()
                    ->label(__('Image'))
                    ->toArray()
            );
    });
});
