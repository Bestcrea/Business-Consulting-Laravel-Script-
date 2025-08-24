<?php

use Botble\Portfolio\Models\CustomField;
use Botble\Widget\AbstractWidget;
use Illuminate\Support\Collection;

class ServiceGetAQuoteWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Service Get A Quote'),
            'description' => __('Widget description'),
        ]);
    }

    protected function data(): array|Collection
    {
        if (! is_plugin_active('portfolio')) {
            return [];
        }

        return [
            'customFields' => CustomField::query()
                ->wherePublished()
                ->with('options')
                ->get(),
        ];
    }
}
