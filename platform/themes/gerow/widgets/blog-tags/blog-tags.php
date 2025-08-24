<?php

use Botble\Widget\AbstractWidget;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class BlogTagsWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Blog Tags'),
            'title' => __('Tags'),
            'description' => __('Blog tags widget.'),
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
            $tags = get_popular_tags($limit);
        } else {
            $tags = get_all_tags();
        }

        return compact('type', 'tags');
    }
}
