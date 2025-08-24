<?php

use Botble\Widget\AbstractWidget;
use Illuminate\Support\Collection;

class HeaderMainMenuWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Header Menu'),
            'description' => __('Header Menu'),
        ]);
    }

    protected function data(): array|Collection
    {
        return [];
    }
}
