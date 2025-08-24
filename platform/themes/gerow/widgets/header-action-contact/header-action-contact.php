<?php

use Botble\Theme\Facades\Theme;
use Botble\Widget\AbstractWidget;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class HeaderActionContactWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Header Action Contact'),
            'description' => __('Widget description'),
        ]);
    }

    protected function data(): array|Collection
    {
        $config = $this->getConfig();

        $headerStyle = Theme::get('headerStyle');
        $icon = Arr::get($config, 'icon');
        $content = Arr::get($config, 'content');
        $detail = Arr::get($config, 'detail');

        return compact('headerStyle', 'icon', 'content', 'detail');
    }
}
