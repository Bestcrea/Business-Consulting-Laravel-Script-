<?php

use Botble\Theme\Facades\Theme;
use Botble\Widget\AbstractWidget;
use Illuminate\Support\Collection;

class HeaderActionSearchWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Header Action Search'),
            'description' => __('Widget description'),
        ]);
    }

    protected function data(): array|Collection
    {
        $headerStyle = Theme::get('headerStyle');

        return compact('headerStyle');
    }
}
