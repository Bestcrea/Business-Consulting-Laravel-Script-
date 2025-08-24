<?php

use Botble\Base\Facades\Html;
use Botble\Base\Forms\FieldOptions\MediaImageFieldOption;
use Botble\Base\Forms\FieldOptions\SelectFieldOption;
use Botble\Base\Forms\FieldOptions\TextareaFieldOption;
use Botble\Base\Forms\FieldOptions\TextFieldOption;
use Botble\Base\Forms\Fields\MediaImageField;
use Botble\Base\Forms\Fields\SelectField;
use Botble\Base\Forms\Fields\TextareaField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Portfolio\Models\Package;
use Botble\Portfolio\Models\Project;
use Botble\Portfolio\Models\Service;
use Botble\Portfolio\Models\ServiceCategory;
use Botble\Shortcode\Compilers\Shortcode as ShortcodeCompiler;
use Botble\Shortcode\Events\ShortcodeAdminConfigRendering;
use Botble\Shortcode\Facades\Shortcode;
use Botble\Shortcode\Forms\ShortcodeForm;
use Botble\Theme\Facades\Theme;
use Illuminate\Support\Arr;

app()->booted(function (): void {
    if (! is_plugin_active('portfolio')) {
        return;
    }

    Shortcode::register('featured-projects', __('Featured projects'), __('Featured projects'), function (ShortcodeCompiler $shortcode): ?string {
        if (! ($projectIds = Shortcode::fields()->getIds('project_ids', $shortcode))) {
            return null;
        }

        $projects = Project::query()
            ->whereIn('id', $projectIds)
            ->wherePublished()
            ->get();

        return Theme::partial('shortcodes.featured-projects.index', compact('shortcode', 'projects'));
    });

    Shortcode::setAdminConfig('featured-projects', function (array $attributes): ShortcodeForm {
        $projects = Project::query()
            ->wherePublished()
            ->pluck('name', 'id')
            ->all();

        return ShortcodeForm::createFromArray($attributes)
            ->withLazyLoading()
            ->add(
                'style',
                SelectField::class,
                SelectFieldOption::make()
                    ->label(__('Style'))
                    ->choices([
                        'style-1' => __('Style :number', ['number' => 1]),
                        'style-2' => __('Style :number', ['number' => 2]),
                        'style-3' => __('Style :number', ['number' => 3]),
                    ])
            )
            ->add(
                'title',
                TextField::class,
                TextFieldOption::make()->label(__('Title'))
            )
            ->add(
                'subtitle',
                TextField::class,
                TextFieldOption::make()->label(__('Subtitle'))
            )
            ->add(
                'description',
                TextareaField::class,
                TextareaFieldOption::make()->label(__('Description'))
            )
            ->add(
                'button_label',
                TextField::class,
                TextFieldOption::make()->label(__('Button label'))
            )
            ->add(
                'button_url',
                TextField::class,
                TextFieldOption::make()->label(__('Button url'))
            )
            ->add(
                'background_image',
                MediaImageField::class,
                MediaImageFieldOption::make()->label(__('Background image'))
            )
            ->add(
                'project_ids',
                SelectField::class,
                SelectFieldOption::make()
                    ->label(__('Projects'))
                    ->choices($projects)
                    ->searchable()
                    ->selected(explode(',', Arr::get($attributes, 'project_ids')))
                    ->multiple()
            );
    });

    Shortcode::register('featured-service-categories', __('Featured service categories'), __('Featured service categories'), function (ShortcodeCompiler $shortcode): ?string {
        if (! ($categoryIds = Shortcode::fields()->getIds('category_ids', $shortcode))) {
            return null;
        }

        $categories = ServiceCategory::query()
            ->whereIn('id', $categoryIds)
            ->wherePublished()
            ->with('metadata')
            ->get();

        return Theme::partial('shortcodes.featured-service-categories.index', compact('shortcode', 'categories'));
    });

    Shortcode::setAdminConfig('featured-service-categories', function (array $attributes): ?string {
        $categories = ServiceCategory::query()
            ->wherePublished()
            ->pluck('name', 'id')
            ->all();

        return Theme::partial('shortcodes.featured-service-categories.admin', compact('attributes', 'categories'));
    });

    Shortcode::register('pricing', __('Pricing'), __('Pricing'), function (ShortcodeCompiler $shortcode): ?string {
        if (! ($packageIds = Shortcode::fields()->getIds('package_ids', $shortcode))) {
            return null;
        }

        $packages = Package::query()
            ->wherePublished()
            ->whereIn('id', $packageIds)
            ->with(['metadata'])
            ->get();

        if (theme_option('preloader_enabled', true)) {
            Theme::asset()->usePath()->add('aos-css', 'plugins/aos/aos.css');
            Theme::asset()->container('footer')->usePath()->add('aos-js', 'plugins/aos/aos.js');
        }

        return Theme::partial('shortcodes.pricing.index', compact('shortcode', 'packages'));
    });

    Shortcode::setAdminConfig('pricing', function (array $attributes): string {
        $packages = Package::query()
            ->wherePublished()
            ->pluck('name', 'id')
            ->all();

        return
            Html::style('vendor/core/core/base/libraries/tagify/tagify.css') .
            Html::script('vendor/core/core/base/libraries/tagify/tagify.js') .
            Html::script('vendor/core/core/base/js/tags.js') .
            Theme::partial('shortcodes.pricing.admin', compact('attributes', 'packages'));
    });

    Shortcode::register('featured-services', __('Featured services'), __('Featured services'), function (ShortcodeCompiler $shortcode): ?string {
        if (! $serviceIds = Shortcode::fields()->getIds('service_ids', $shortcode)) {
            return null;
        }

        $services = Service::query()
            ->whereIn('id', $serviceIds)
            ->wherePublished()
            ->with(['metadata', 'slugable'])
            ->get();

        return Theme::partial('shortcodes.featured-services.index', compact('shortcode', 'services'));
    });

    Shortcode::setAdminConfig('featured-services', function (array $attributes): ?string {
        $services = Service::query()
            ->wherePublished()
            ->pluck('name', 'id')
            ->all();

        return Theme::partial('shortcodes.featured-services.admin', compact('attributes', 'services'));
    });

    Shortcode::register('services-list', __('Services list'), __('Services list'), function (ShortcodeCompiler $shortcode): ?string {
        if (! $serviceIds = Shortcode::fields()->getIds('service_ids', $shortcode)) {
            return null;
        }

        $services = Service::query()
            ->whereIn('id', $serviceIds)
            ->wherePublished()
            ->get();

        return Theme::partial('shortcodes.services-list.index', compact('shortcode', 'services'));
    });

    Shortcode::setAdminConfig('services-list', function (array $attributes): ?string {
        $services = Service::query()
            ->wherePublished()
            ->pluck('name', 'id')
            ->all();

        return Theme::partial('shortcodes.services-list.admin', compact('attributes', 'services'));
    });

    add_filter('request-quote-shortcode', function () {
        return Theme::getThemeNamespace('partials.shortcodes.request-quote.index');
    });

    app('events')->listen(ShortcodeAdminConfigRendering::class, function (): void {
        Shortcode::setAdminConfig('request-quote', function (array $attributes): ?string {
            return Theme::partial('shortcodes.request-quote.admin', compact('attributes'));
        });
    });
});
