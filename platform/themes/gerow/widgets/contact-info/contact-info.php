<?php

use Botble\Widget\AbstractWidget;

class ContactInfoWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Contact Info'),
            'description' => __('Widget display contact info'),
            'address' => null,
            'email' => null,
        ]);
    }
}
