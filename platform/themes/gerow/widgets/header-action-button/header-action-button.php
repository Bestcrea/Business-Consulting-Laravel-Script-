<?php

use Botble\Theme\Facades\Theme;
use Botble\Widget\AbstractWidget;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class HeaderActionButtonWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Header Action Button'),
            'description' => __('Button action at the top header'),
        ]);
    }

    protected function data(): array|Collection
    {
        $link = Arr::get($this->getConfig(), 'link', BaseHelper::getHomepageUrl());
        $headerStyle = Theme::get('headerStyle');

        return compact('link', 'headerStyle');
    }
}
