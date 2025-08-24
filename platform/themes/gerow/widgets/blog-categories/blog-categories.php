<?php

use Botble\Widget\AbstractWidget;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class BlogCategoriesWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Blog Categories'),
            'title' => __('Categories'),
            'description' => __('Blog categories widget.'),
            'number_display' => 5,
        ]);
    }

    protected function data(): array|Collection
    {
        if (! is_plugin_active('blog')) {
            return [];
        }

        $config = $this->getConfig();

        $limit = (int) Arr::get($config, 'limit', 10);
        $type = Arr::get($config, 'type');

        if ($limit > 0) {
            $categories = get_popular_categories($limit);
        } else {
            $categories = get_all_categories();
        }

        return compact('type', 'categories');
    }
}
