<?php

use Botble\Base\Forms\FieldOptions\MediaImageFieldOption;
use Botble\Base\Forms\FieldOptions\NumberFieldOption;
use Botble\Base\Forms\FieldOptions\SelectFieldOption;
use Botble\Base\Forms\FieldOptions\TextareaFieldOption;
use Botble\Base\Forms\FieldOptions\TextFieldOption;
use Botble\Base\Forms\Fields\MediaImageField;
use Botble\Base\Forms\Fields\NumberField;
use Botble\Base\Forms\Fields\SelectField;
use Botble\Base\Forms\Fields\TextareaField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Shortcode\Compilers\Shortcode as ShortcodeCompiler;
use Botble\Shortcode\Facades\Shortcode;
use Botble\Shortcode\Forms\ShortcodeForm;
use Botble\Theme\Facades\Theme;

app()->booted(function (): void {
    if (! is_plugin_active('blog')) {
        return;
    }

    Shortcode::register('news', __('News'), __('News'), function (ShortcodeCompiler $shortcode): ?string {
        $limit = (int) $shortcode->limit ?: 4;

        $posts = match ($shortcode->type) {
            'popular' => get_popular_posts($limit),
            'featured' => get_featured_posts($limit),
            'recent' => get_recent_posts($limit),
            default => get_latest_posts($limit),
        };

        if ($posts->isEmpty()) {
            return null;
        }

        return Theme::partial('shortcodes.news.index', compact('shortcode', 'posts'));
    });

    Shortcode::setAdminConfig('news', function (array $attributes): ShortcodeForm {
        $types = [
            'latest' => __('Latest'),
            'popular' => __('Popular'),
            'featured' => __('Featured'),
            'recent' => __('Recent'),
        ];

        return ShortcodeForm::createFromArray($attributes)
            ->withLazyLoading()
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
                'type',
                SelectField::class,
                SelectFieldOption::make()
                    ->choices($types)
                    ->label(__('Type'))
            )
            ->add(
                'limit',
                NumberField::class,
                NumberFieldOption::make()->label(__('Limit'))
            )
            ->add(
                'background_image',
                MediaImageField::class,
                MediaImageFieldOption::make()->label(__('Background image'))
            )
            ->add(
                'style',
                SelectField::class,
                SelectFieldOption::make()
                    ->label(__('Style'))
                    ->choices([
                        'style-1' => __('Style :number', ['number' => 1]),
                        'style-2' => __('Style :number', ['number' => 2]),
                    ])
            );
    });
});
