<?php

use Botble\Theme\Events\RenderingThemeOptionSettings;

app('events')->listen(RenderingThemeOptionSettings::class, function (): void {
    theme_option()
        ->setSection([
            'title' => __('Social Links'),
            'desc' => __('Social Links at the footer.'),
            'id' => 'opt-text-subsection-social-links',
            'subsection' => true,
            'icon' => 'ti ti-share',
            'fields' => [
                [
                    'id' => 'social_links',
                    'type' => 'repeater',
                    'label' => __('Social Links'),
                    'attributes' => [
                        'name' => 'social_links',
                        'value' => null,
                        'fields' => [
                            [
                                'type' => 'text',
                                'label' => __('Name'),
                                'attributes' => [
                                    'name' => 'name',
                                    'value' => null,
                                    'options' => [
                                        'class' => 'form-control',
                                    ],
                                ],
                            ],
                            [
                                'type' => 'coreIcon',
                                'label' => __('Icon'),
                                'attributes' => [
                                    'name' => 'social-icon',
                                    'value' => null,
                                    'options' => [
                                        'class' => 'form-control',
                                    ],
                                ],
                            ],
                            [
                                'type' => 'text',
                                'label' => __('URL'),
                                'attributes' => [
                                    'name' => 'url',
                                    'value' => null,
                                    'options' => [
                                        'class' => 'form-control',
                                    ],
                                ],
                            ],
                            [
                                'type' => 'mediaImage',
                                'label' => __('Icon Image (It will replace Icon Font if it is present.)'),
                                'attributes' => [
                                    'name' => 'social-icon-image',
                                    'value' => null,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ])
        ->setField([
            'id' => 'breadcrumb_background',
            'section_id' => 'opt-text-subsection-breadcrumb',
            'type' => 'mediaImage',
            'label' => __('Breadcrumb background'),
            'attributes' => [
                'name' => 'breadcrumb_background',
            ],
        ])
        ->setField([
            'id' => 'enabled_breadcrumb_background_overlay',
            'section_id' => 'opt-text-subsection-breadcrumb',
            'type' => 'customSelect',
            'label' => __('Enable breadcrumb background overlay?'),
            'attributes' => [
                'name' => 'breadcrumb_background_overlay_enabled',
                'list' => [
                    'yes' => trans('core/base::base.yes'),
                    'no' => trans('core/base::base.no'),
                ],
                'value' => 'yes',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id' => 'breadcrumb_first_shape_image',
            'section_id' => 'opt-text-subsection-breadcrumb',
            'type' => 'mediaImage',
            'label' => __('Breadcrumb first shape image'),
            'attributes' => [
                'name' => 'breadcrumb_first_shape_image',
            ],
        ])
        ->setField([
            'id' => 'breadcrumb_second_shape_image',
            'section_id' => 'opt-text-subsection-breadcrumb',
            'type' => 'mediaImage',
            'label' => __('Breadcrumb second shape image'),
            'attributes' => [
                'name' => 'breadcrumb_second_shape_image',
            ],
        ])
        ->setSection([
            'title' => __('Styles'),
            'id' => 'opt-text-subsection-styles',
            'subsection' => true,
            'icon' => 'ti ti-palette',
            'fields' => [
                [
                    'id' => 'header_style',
                    'type' => 'customSelect',
                    'label' => __('Header style'),
                    'attributes' => [
                        'name' => 'header_style',
                        'choices' => ['style-1' => __('Header style :number', ['number' => 1]), 'style-2' => __('Header style :number', ['number' => 2]), 'style-3' => __('Header style :number', ['number' => 3])],
                        'value' => 'style-1',
                    ],
                ],
                [
                    'id' => 'header_top_sidebar_style',
                    'type' => 'customSelect',
                    'label' => __('Header top sidebar style'),
                    'attributes' => [
                        'name' => 'header_top_sidebar_style',
                        'choices' => ['style-1' => __('Header top style :number', ['number' => 1]), 'style-2' => __('Header top style :number', ['number' => 2])],
                        'value' => 'style-1',
                    ],
                ],
                [
                    'id' => 'heading_font',
                    'type' => 'googleFonts',
                    'label' => __('Heading font'),
                    'attributes' => [
                        'name' => 'heading_font',
                        'value' => 'Urbanist',
                    ],
                ],
                [
                    'id' => 'primary_font',
                    'type' => 'googleFonts',
                    'label' => __('Primary font'),
                    'attributes' => [
                        'name' => 'primary_font',
                        'value' => 'Plus Jakarta Sans',
                    ],
                ],
                [
                    'id' => 'primary_color',
                    'type' => 'customColor',
                    'label' => __('Primary color'),
                    'attributes' => [
                        'name' => 'primary_color',
                        'value' => '#0055FF',
                    ],
                ],
                [
                    'id' => 'primary_hover_color',
                    'type' => 'customColor',
                    'label' => __('Primary hover color'),
                    'attributes' => [
                        'name' => 'primary_hover_color',
                        'value' => '#0049DC',
                    ],
                ],
                [
                    'id' => 'secondary_color',
                    'type' => 'customColor',
                    'label' => __('Secondary color'),
                    'attributes' => [
                        'name' => 'secondary_color',
                        'value' => '#00194C',
                    ],
                ],
                [
                    'id' => 'heading_color',
                    'type' => 'customColor',
                    'label' => __('Heading color'),
                    'attributes' => [
                        'name' => 'heading_color',
                        'value' => '#00194C',
                    ],
                ],
                [
                    'id' => 'text_color',
                    'type' => 'customColor',
                    'label' => __('Text color'),
                    'attributes' => [
                        'name' => 'text_color',
                        'value' => '#334770',
                    ],
                ],
                [
                    'id' => 'footer_background_color',
                    'type' => 'customColor',
                    'label' => __('Footer background color'),
                    'attributes' => [
                        'name' => 'footer_background_color',
                        'value' => '#F8FAFF',
                    ],
                ],
                [
                    'id' => 'footer_text_color',
                    'type' => 'customColor',
                    'label' => __('Footer text color'),
                    'attributes' => [
                        'name' => 'footer_text_color',
                        'value' => '#000000',
                    ],
                ],
                [
                    'id' => 'footer_text_muted_color',
                    'type' => 'customColor',
                    'label' => __('Footer text muted color'),
                    'attributes' => [
                        'name' => 'footer_text_muted_color',
                        'value' => '#777777',
                    ],
                ],
                [
                    'id' => 'footer_border_color',
                    'type' => 'customColor',
                    'label' => __('Footer border color'),
                    'attributes' => [
                        'name' => 'footer_border_color',
                        'value' => '0055FF',
                    ],
                ],
                [
                    'id' => 'footer_background_image',
                    'type' => 'mediaImage',
                    'label' => __('Footer background image'),
                    'attributes' => [
                        'name' => 'footer_background_image',
                    ],
                ],
            ],
        ])
        ->setField([
            'id' => 'animation_enabled',
            'section_id' => 'opt-text-subsection-general',
            'type' => 'customSelect',
            'label' => __('Enable animation?'),
            'attributes' => [
                'name' => 'animation_enabled',
                'list' => [
                    true => trans('core/base::base.yes'),
                    false => trans('core/base::base.no'),
                ],
                'value' => true,
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id' => 'phone',
            'section_id' => 'opt-text-subsection-general',
            'type' => 'text',
            'label' => __('Phone number'),
            'attributes' => [
                'name' => 'phone',
                'value' => null,
                'options' => [
                    'class' => 'form-control',
                    'placeholder' => __('Enter phone number'),
                ],
            ],
        ])
        ->setField([
            'id' => 'address',
            'section_id' => 'opt-text-subsection-general',
            'type' => 'textarea',
            'label' => __('Address'),
            'attributes' => [
                'name' => 'address',
                'value' => null,
                'options' => [
                    'rows' => 3,
                    'class' => 'form-control',
                    'placeholder' => __('Enter location address'),
                ],
            ],
        ])
        ->setSection([
            'title' => __('Portfolio'),
            'desc' => null,
            'id' => 'opt-text-subsection-portfolios',
            'subsection' => true,
            'icon' => 'ti ti-briefcase',
            'fields' => [
                [
                    'id' => 'show_service_image_at_the_top_of_service_page',
                    'type' => 'customSelect',
                    'label' => __('Show service image at the top of service page?'),
                    'attributes' => [
                        'name' => 'show_service_image_at_the_top_of_service_page',
                        'list' => [
                            'yes' => trans('core/base::base.yes'),
                            'no' => trans('core/base::base.no'),
                        ],
                        'value' => 'yes',
                    ],
                ],
            ],
        ]);
});
