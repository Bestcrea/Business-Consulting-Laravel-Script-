<?php

use Botble\Portfolio\Models\Service;
use Botble\Widget\AbstractWidget;
use Illuminate\Support\Collection;

class ServicesListWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Services List'),
            'description' => __('Widget description'),
        ]);
    }

    protected function data(): array|Collection
    {
        $config = $this->getConfig();
        $limit = (int) Arr::get($config, 'limit');

        $services = Service::query()
            ->wherePublished()
            ->orderBy('is_featured', 'desc')
            ->oldest()
            ->limit($limit)
            ->get();

        return compact('services');
    }
}
