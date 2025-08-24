<?php

use Botble\Widget\AbstractWidget;

class SiteCopyrightWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Site Copyright'),
            'description' => __('Widget display site copyright'),
            'copyright' => null,
            'style' => 'default',
        ]);
    }
}
