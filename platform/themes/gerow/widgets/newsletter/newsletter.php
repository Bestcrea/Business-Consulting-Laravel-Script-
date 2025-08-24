<?php

use Botble\Base\Forms\FieldOptions\AlertFieldOption;
use Botble\Base\Forms\FieldOptions\ButtonFieldOption;
use Botble\Base\Forms\FieldOptions\SelectFieldOption;
use Botble\Base\Forms\FieldOptions\TextareaFieldOption;
use Botble\Base\Forms\FieldOptions\TextFieldOption;
use Botble\Base\Forms\Fields\AlertField;
use Botble\Base\Forms\Fields\SelectField;
use Botble\Base\Forms\Fields\TextareaField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Newsletter\Forms\Fronts\NewsletterForm;
use Botble\Widget\AbstractWidget;
use Botble\Widget\Forms\WidgetForm;

class NewsletterWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Newsletter'),
            'description' => __('Add a newsletter to your widget area.'),
            'with_social_links' => 'yes',
        ]);
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
                'with_social_links',
                SelectField::class,
                SelectFieldOption::make()
                    ->label(__('With social links'))
                    ->choices([
                        'yes' => 'Yes',
                        'no' => 'No',
                    ])
                    ->toArray()
            )
            ->add(
                'alert',
                AlertField::class,
                AlertFieldOption::make()
                    ->content(__('Please go to Theme options -> Social links to setup social links.'))
                    ->toArray()
            );
    }

    public function data(): array
    {
        if (! is_plugin_active('newsletter')) {
            return [];
        }

        $form = NewsletterForm::create()
            ->formClass('newsletter-form')
            ->remove('submit')
            ->add(
                'submit',
                'submit',
                ButtonFieldOption::make()
                    ->label(__('Subscribe'))
                    ->attributes(['class' => ''])
                    ->toArray(),
            );

        return compact('form');
    }
}
