<?php

use Botble\Theme\Facades\Theme;
use Botble\Widget\AbstractWidget;
use Illuminate\Support\Collection;

class HeaderActionMenuButtonWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Header Action Menu Button'),
            'description' => __('Widget description'),
            'with_social_links' => 'yes',
        ]);
    }

    protected function data(): array|Collection
    {
        $headerStyle = Theme::get('headerStyle');

        return compact('headerStyle');
    }
}
