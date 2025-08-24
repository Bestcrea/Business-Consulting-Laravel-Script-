<?php

use Botble\Widget\AbstractWidget;

class ServiceActionWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Service Action'),
            'description' => __('Widget description'),
        ]);
    }
}
