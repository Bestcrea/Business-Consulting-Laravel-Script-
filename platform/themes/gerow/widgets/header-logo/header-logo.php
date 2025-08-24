<?php

use Botble\Widget\AbstractWidget;
use Botble\Theme\Facades\Theme;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class HeaderLogoWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Header Logo'),
            'description' => __('Widget description'),
            'logo_image' => null,
        ]);
    }

    protected function data(): array|Collection
    {
        $logoImage = Arr::get($this->getConfig(), 'logo_image') ?: Theme::getLogo();

        return compact('logoImage');
    }
}
