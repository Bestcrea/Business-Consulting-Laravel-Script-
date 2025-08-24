<?php

use Botble\Base\Forms\FieldOptions\InputFieldOption;
use Botble\Base\Forms\FieldOptions\MediaImageFieldOption;
use Botble\Base\Forms\FieldOptions\TextareaFieldOption;
use Botble\Base\Forms\FieldOptions\TextFieldOption;
use Botble\Base\Forms\Fields\ColorField;
use Botble\Base\Forms\Fields\MediaImageField;
use Botble\Base\Forms\Fields\TextareaField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Contact\Forms\Fronts\ContactForm;
use Botble\Theme\Facades\Theme;
use Botble\Widget\AbstractWidget;
use Botble\Widget\Forms\WidgetForm;

class ContactFormWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Contact Form'),
            'description' => __('Widget description'),
            'background_image_1' => null,
            'background_image_2' => null,
            'background_color' => null,
        ]);

        Theme::asset()
            ->usePath(false)
            ->add('contact-css', asset('vendor/core/plugins/contact/css/contact-public.css'), [], [], '1.0.0');
        Theme::asset()
            ->container('footer')
            ->usePath(false)
            ->add(
                'contact-public-js',
                asset('vendor/core/plugins/contact/js/contact-public.js'),
                ['jquery'],
                [],
                '1.0.0'
            );
    }

    public function settingForm(): ?WidgetForm
    {
        return WidgetForm::createFromArray($this->getConfig())
            ->add(
                'name',
                TextField::class,
                TextFieldOption::make()
                    ->label(__('Name'))
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
                'background_image_1',
                MediaImageField::class,
                MediaImageFieldOption::make()
                    ->label(__('Background image :number', ['number' => 1]))
                    ->toArray()
            )
            ->add(
                'background_image_2',
                MediaImageField::class,
                MediaImageFieldOption::make()
                    ->label(__('Background image :number', ['number' => 2]))
                    ->toArray()
            )
            ->add(
                'background_color',
                ColorField::class,
                InputFieldOption::make()
                    ->label(__('Background color'))
                    ->toArray()
            );
    }

    public function data(): array
    {
        if (! is_plugin_active('contact')) {
            return [];
        }

        $data['display_fields'] = 'phone,email,address';
        $data['mandatory_fields'] = 'email';
        $form = ContactForm::createFromArray($data);

        return compact('form');
    }
}
