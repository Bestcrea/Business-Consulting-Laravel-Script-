<?php

use Botble\Widget\AbstractWidget;

class LanguageSwitcherWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Language Switcher'),
            'description' => __('Widget display language switcher'),
        ]);
    }
}
