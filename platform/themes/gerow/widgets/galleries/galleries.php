<?php

use Botble\Gallery\Models\Gallery;
use Botble\Widget\AbstractWidget;
use Illuminate\Support\Collection;

class GalleriesWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Galleries'),
            'description' => __('Widget description'),
            'gallery_id' => null,
        ]);
    }

    protected function adminConfig(): array
    {
        return [
            'galleries' => Gallery::query()
                ->wherePublished()
                ->pluck('name', 'id'),
        ];
    }

    protected function data(): array|Collection
    {
        return [
            'gallery' => Gallery::query()
                ->wherePublished()
                ->where('id', $this->getConfig('gallery_id'))
                ->first(),
        ];
    }

    protected function requiredPlugins(): array
    {
        return ['gallery'];
    }
}
