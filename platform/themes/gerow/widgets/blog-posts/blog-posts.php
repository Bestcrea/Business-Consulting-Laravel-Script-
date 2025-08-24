<?php

use Botble\Widget\AbstractWidget;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class BlogPostsWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Blog Posts'),
            'title' => __('Recent Posts'),
            'description' => __('Blog posts widget.'),
            'type' => 'recent',
            'limit' => 5,
        ]);
    }

    protected function data(): array|Collection
    {
        if (! is_plugin_active('blog')) {
            return [];
        }

        $config = $this->getConfig();

        $limit = (int) Arr::get($config, 'limit');

        $posts = match (Arr::get($config, 'type')) {
            'recent' => get_recent_posts($limit),
            default => get_popular_posts($limit),
        };

        return compact('posts');
    }
}
