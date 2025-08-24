<?php

use ArchiElite\Announcement\Models\Announcement;
use ArchiElite\Career\Models\Career;
use Botble\ACL\Forms\ProfileForm;
use Botble\ACL\Models\User;
use Botble\Base\Contracts\BaseModel;
use Botble\Base\Facades\Assets;
use Botble\Base\Facades\MetaBox;
use Botble\Base\Forms\Fields\TagField;
use Botble\Base\Forms\FormAbstract;
use Botble\Blog\Models\Post;
use Botble\Gallery\Facades\Gallery;
use Botble\Media\Facades\RvMedia;
use Botble\Newsletter\Facades\Newsletter;
use Botble\Newsletter\Forms\Fronts\NewsletterForm;
use Botble\Page\Models\Page;
use Botble\Portfolio\Models\Package;
use Botble\Portfolio\Models\Service;
use Botble\Portfolio\Models\ServiceCategory;
use Botble\Theme\Facades\Theme;
use Botble\Theme\Supports\ThemeSupport;
use Illuminate\Http\Request;

register_page_template([
    'default' => __('Default'),
    'homepage' => __('Homepage'),
    'blog-sidebar' => __('Sidebar'),
    'page-detail' => __('Page Detail'),
    'coming-soon' => __('Coming soon'),
]);

register_sidebar([
    'id' => 'blog_sidebar',
    'name' => __('Blog sidebar'),
    'description' => __('Sidebar on the right of the blog detail site.'),
]);

register_sidebar([
    'id' => 'service_detail_sidebar',
    'name' => __('Service detail sidebar'),
    'description' => __('Sidebar on the right of the service detail site.'),
]);

register_sidebar([
    'id' => 'service_detail_bottom_sidebar',
    'name' => __('Service detail bottom sidebar'),
    'description' => __('Sidebar on the bottom of the service detail site.'),
]);

register_sidebar([
    'id' => 'project_detail_bottom_sidebar',
    'name' => __('Project detail bottom sidebar'),
    'description' => __('Sidebar on the bottom of the project detail site.'),
]);

register_sidebar([
    'id' => 'header_top_sidebar_style_1',
    'name' => __('Header top sidebar style :number', ['number' => 1]),
    'description' => __('Header top sidebar style :number', ['number' => 1]),
]);

register_sidebar([
    'id' => 'header_top_sidebar_style_2',
    'name' => __('Header top sidebar style :number', ['number' => 2]),
    'description' => __('Header top sidebar style :number', ['number' => 2]),
]);

register_sidebar([
    'id' => 'header_style_1',
    'name' => __('Header sidebar style :number', ['number' => 1]),
    'description' => __('Header sidebar style :number', ['number' => 1]),
]);

register_sidebar([
    'id' => 'header_style_2',
    'name' => __('Header sidebar style :number', ['number' => 2]),
    'description' => __('Header sidebar style :number', ['number' => 2]),
]);

register_sidebar([
    'id' => 'header_style_3',
    'name' => __('Header sidebar style :number', ['number' => 3]),
    'description' => __('Header sidebar style :number', ['number' => 3]),
]);

register_sidebar([
    'id' => 'footer_sidebar',
    'name' => 'Footer sidebar',
    'description' => __('Area for footer widgets'),
]);

register_sidebar([
    'id' => 'footer_sidebar_style_1',
    'name' => __('Footer sidebar style :number', ['number' => 1]),
    'description' => __('Footer sidebar style :number', ['number' => 1]),
]);

register_sidebar([
    'id' => 'pre_footer_sidebar',
    'name' => 'Pre Footer sidebar',
    'description' => __('Area for pre footer widgets'),
]);

register_sidebar([
    'id' => 'pre_footer_sidebar_1',
    'name' => __('Pre Footer sidebar :number', ['number' => 1]),
    'description' => __('Area for pre footer widgets :number', ['number' => 1]),
]);

register_sidebar([
    'id' => 'footer_bottom',
    'name' => __('Footer Bottom'),
    'description' => __('Area for footer bottom widgets'),
]);

register_sidebar([
    'id' => 'footer_bottom_style_1',
    'name' => __('Footer bottom style :number', ['number' => 1]),
    'description' => __('Bottom footer sidebar style :number', ['number' => 1]),
]);

register_sidebar([
    'id' => 'side_sidebar',
    'name' => 'Side sidebar',
    'description' => __('Area for right sidebar widgets'),
]);

RvMedia::addSize('medium', 350, 450)
    ->addSize('small', 280, 180);

app()->booted(function (): void {
    remove_sidebar('primary_sidebar');
    ThemeSupport::registerLazyLoadImages();
    ThemeSupport::registerToastNotification();
    ThemeSupport::registerPreloader();
    ThemeSupport::registerSocialSharing();
    ThemeSupport::registerSiteLogoHeight(30);

    add_filter('theme_preloader_versions', fn (array $versions) => [
        ...$versions,
        'v2' => __('V2'),
    ], 999);

    add_filter('theme_preloader', function (string $preloader) {
        if (theme_option('preloader_version', 'v1') === 'v2') {
            return Theme::partial('preloader');
        }

        return $preloader;
    }, 999);

    if (is_plugin_active('announcement')) {
        try {
            if (Announcement::query()->available()->exists()) {
                Theme::addBodyAttributes(['data-bb-toggle' => 'announcement',  'data-bb-target' => 'header']);
            }
        } catch (Exception $e) {
            report($e);
        }
    }

    if (is_plugin_active('gallery')) {
        Gallery::removeModule(Post::class);
        Gallery::removeModule(Page::class);
    }

    if (is_plugin_active('newsletter')) {
        Newsletter::registerNewsletterPopup();

        NewsletterForm::extend(function (NewsletterForm $form) {
            return $form->formClass('newsletter-form');
        });
    }

    add_filter(BASE_FILTER_BEFORE_RENDER_FORM, function (FormAbstract $form, BaseModel $data): FormAbstract {
        if ($form instanceof ProfileForm) {
            $data->loadMissing('metadata');

            $form
                ->addAfter('email', 'display_name', 'text', [
                    'label' => __('Display name'),
                    'label_attr' => ['class' => 'form-label'],
                    'value' => $data->getMetaData('display_name', true),
                    'wrapper' => [
                        'class' => 'col-md-6 mb-3',
                    ],
                ]);
        }

        switch (get_class($data)) {
            case Page::class:
                Assets::addScriptsDirectly(Theme::asset()->url('js/page.js'));
                Assets::addScriptsDirectly(Theme::asset()->url('js/shortcode.js'));
                $data->loadMissing('metadata');

                $form
                    ->addAfter('image', 'breadcrumb_background_image', is_in_admin(true) ? 'mediaImage' : 'customImage', [
                        'label' => __('Banner image (1920x330px)'),
                        'label_attr' => ['class' => 'form-label'],
                        'value' => $data->getMetaData('breadcrumb_background_image', true),
                    ])
                    ->addAfter('breadcrumb_background_image', 'header_style', 'customSelect', [
                        'label' => __('Header style'),
                        'label_attr' => ['class' => 'form-label'],
                        'choices' => ['style-1' => __('Header style :number', ['number' => 1]), 'style-2' => __('Header style :number', ['number' => 2]), 'style-3' => __('Header style :number', ['number' => 3])],
                        'selected' => $data->getMetaData('header_style', true),
                    ])
                    ->addAfter('breadcrumb_background_image', 'breadcrumb_background_image_overlay_enabled', 'customSelect', [
                        'label' => __('Enable banner background overlay?'),
                        'label_attr' => ['class' => 'form-label'],
                        'choices' => [
                            'yes' => trans('core/base::base.yes'),
                            'no' => trans('core/base::base.no'),
                        ],
                        'selected' => $data->getMetaData('breadcrumb_background_image_overlay_enabled', 'yes') == 'yes',
                    ])
                    ->addAfter('header_style', 'header_top_sidebar_style', 'customSelect', [
                        'label' => __('Header top sidebar style'),
                        'label_attr' => ['class' => 'form-label'],
                        'choices' => ['style-1' => __('Header top style :number', ['number' => 1]), 'style-2' => __('Header top style :number', ['number' => 2])],
                        'selected' => $data->getMetaData('header_top_sidebar_style', true),
                    ])
                    ->addAfter('header_top_sidebar_style', 'footer_style', 'customSelect', [
                        'label' => __('Footer style'),
                        'label_attr' => ['class' => 'form-label'],
                        'choices' => [
                            'default' => __('Default'),
                            'style-1' => __('Footer style :number', ['number' => 1]),
                        ],
                        'selected' => $data->getMetaData('footer_style', true),
                    ])
                    ->addAfter('footer_style', 'bottom_footer_style', 'customSelect', [
                        'label' => __('Bottom footer style'),
                        'label_attr' => ['class' => 'form-label'],
                        'choices' => [
                            'default' => __('Default'),
                            'style-1' => __('Footer style :number', ['number' => 1]),
                        ],
                        'selected' => $data->getMetaData('bottom_footer_style', true),
                    ])
                    ->addAfter('bottom_footer_style', 'customize_footer', 'customSelect', [
                        'label' => __('Customize footer'),
                        'label_attr' => ['class' => 'form-label'],
                        'choices' => ['inherit' => __('Inherit'), 'custom' => __('Custom')],
                        'selected' => $data->getMetaData('customize_footer', true) ?: 'inherit',
                    ])
                    ->addAfter('customize_footer', 'footer_background_image', 'mediaImage', [
                        'label' => __('Footer background image'),
                        'label_attr' => ['class' => 'form-label'],
                        'value' => $data->getMetaData('footer_background_image', true),
                    ])
                    ->addAfter('footer_background_image', 'footer_background_color', 'customColor', [
                        'label' => __('Footer background color'),
                        'label_attr' => ['class' => 'form-label'],
                        'value' => $data->getMetaData('footer_background_color', true) ?: theme_option('footer_background_color', '#040404'),
                    ])
                    ->addAfter('footer_background_color', 'footer_text_color', 'customColor', [
                        'label' => __('Footer text color'),
                        'label_attr' => ['class' => 'form-label'],
                        'value' => $data->getMetaData('footer_text_color', true) ?: theme_option('footer_text_color', '#fff'),
                    ])
                    ->addAfter('footer_text_color', 'footer_text_muted_color', 'customColor', [
                        'label' => __('Footer text muted color'),
                        'label_attr' => ['class' => 'form-label'],
                        'value' => $data->getMetaData('footer_text_muted_color', true) ?: theme_option('footer_text_muted_color', '#a0a0a0'),
                    ])
                    ->addAfter('footer_text_color', 'footer_border_color', 'customColor', [
                        'label' => __('Footer border color'),
                        'label_attr' => ['class' => 'form-label'],
                        'value' => $data->getMetaData('footer_border_color', true) ?: theme_option('footer_border_color', '#282828'),
                    ])
                    ->addAfter('header_top_sidebar_style', 'pre_footer_sidebar_style', 'customSelect', [
                        'label' => __('Pre footer sidebar style'),
                        'label_attr' => ['class' => 'form-label'],
                        'choices' => [
                            'none' => __('None'),
                            'style-1' => __('Style :number', ['number' => 1]),
                            'style-2' => __('Style :number', ['number' => 2]),
                        ],
                        'selected' => $data->getMetaData('pre_footer_sidebar_style', true) ?: 'style-1',
                    ]);

                break;
            case ServiceCategory::class:
                $data->loadMissing('metadata');

                $form
                    ->addAfter('status', 'icon', 'themeIcon', [
                        'label' => __('Icon'),
                        'label_attr' => ['class' => 'form-label'],
                        'value' => $data->getMetaData('icon', true),
                    ]);

                break;
            case Service::class:
                $data->loadMissing('metadata');

                $form
                    ->addAfter('status', 'icon', 'themeIcon', [
                        'label' => __('Icon'),
                        'label_attr' => ['class' => 'form-label'],
                        'value' => $data->getMetaData('icon', true),
                    ])
                    ->addAfter('icon', 'icon_image', 'mediaImage', [
                        'label' => __('Icon image'),
                        'label_attr' => ['class' => 'form-label'],
                        'value' => $data->getMetaData('icon_image', true),
                    ]);

                break;
            case Package::class:
                $data->loadMissing('metadata');

                $form
                    ->addAfter('is_popular', 'rowOpen', 'html', [
                        'html' => '<div class="row">',
                    ])
                    ->addAfter('is_popular', 'rowClose', 'html', [
                        'html' => '</div>',
                    ])
                    ->addAfter('status', 'image', 'mediaImage', [
                        'label' => __('Image'),
                        'label_attr' => ['class' => 'form-label'],
                        'value' => $data->getMetaData('image', true),
                    ])
                    ->addAfter('status', 'icon', 'themeIcon', [
                        'label' => __('Icon'),
                        'label_attr' => ['class' => 'form-label'],
                        'value' => $data->getMetaData('icon', true),
                    ]);

                break;
            case Career::class:
                $form
                    ->addCustomField('tags', TagField::class)
                    ->addAfter('status', 'apply_url', 'text', [
                        'label' => __('Apply URL'),
                        'label_attr' => ['class' => 'control-label'],
                        'value' => MetaBox::getMetaData($data, 'apply_url', true),
                    ])
                    ->addAfter('apply_url', 'image', 'mediaImage', [
                        'label' => __('Image'),
                        'label_attr' => ['class' => 'control-label'],
                        'value' => MetaBox::getMetaData($data, 'image', true),
                    ])
                    ->addAfter('image', 'icon', 'mediaImage', [
                        'label' => __('Icon'),
                        'label_attr' => ['class' => 'control-label'],
                        'value' => MetaBox::getMetaData($data, 'icon', true),
                    ])
                    ->addAfter('icon', 'tags', 'tags', [
                        'label' => __('Tags'),
                        'label_attr' => ['class' => 'control-label'],
                        'value' => MetaBox::getMetaData($data, 'tags', true),
                    ]);

                break;
        }

        return $form;
    }, arguments: 3);

    add_action([BASE_ACTION_AFTER_CREATE_CONTENT, BASE_ACTION_AFTER_UPDATE_CONTENT], function (string $type, Request $request, BaseModel $model): void {
        switch ($model::class) {
            case User::class:
                if ($request->has('display_name')) {
                    MetaBox::saveMetaBoxData($model, 'display_name', $request->input('display_name'));
                }

                break;
            case Page::class:
                $fields = [
                    'breadcrumb_background_image',
                    'breadcrumb_background_image_overlay_enabled',
                    'header_style',
                    'header_top_sidebar_style',
                    'footer_style',
                    'bottom_footer_style',
                    'banner_image',
                    'customize_footer',
                    'footer_background_color',
                    'footer_background_image',
                    'footer_border_color',
                    'footer_text_color',
                    'footer_text_muted_color',
                    'pre_footer_sidebar_style',
                ];

                foreach ($fields as $field) {
                    if (! $request->has($field)) {
                        continue;
                    }

                    MetaBox::saveMetaBoxData($model, $field, $request->input($field));
                }

                break;
            case ServiceCategory::class:
                if ($request->has('icon')) {
                    MetaBox::saveMetaBoxData($model, 'icon', $request->input('icon'));
                }

                break;
            case Service::class:
                if ($request->has('icon_image')) {
                    MetaBox::saveMetaBoxData($model, 'icon_image', $request->input('icon_image'));
                }

                if ($request->has('icon')) {
                    MetaBox::saveMetaBoxData($model, 'icon', $request->input('icon'));
                }

                break;
            case Package::class:
                $fields = [
                    'image',
                    'icon',
                ];

                foreach ($fields as $field) {
                    if (! $request->has($field)) {
                        continue;
                    }

                    MetaBox::saveMetaBoxData($model, $field, $request->input($field));
                }

                break;
            case Career::class:
                foreach (['apply_url', 'image', 'icon', 'tags'] as $field) {
                    if ($request->has($field)) {
                        MetaBox::saveMetaBoxData($model, $field, $request->input($field));
                    }
                }

                break;
        }
    }, arguments: 3);
});
