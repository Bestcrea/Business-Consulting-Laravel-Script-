<?php

use Botble\Widget\AbstractWidget;
use Illuminate\Support\Collection;

class BlogSearchWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Blog Search'),
            'description' => __('Widget description'),
        ]);
    }

    protected function data(): array|Collection
    {
        return [];
    }
}
