<?php

use Botble\Widget\AbstractWidget;
use Illuminate\Support\Collection;

class BrandsWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Brands'),
            'description' => __('Widget description'),
        ]);
    }

    protected function data(): array|Collection
    {
        $config = $this->getConfig();

        $fields = ['name', 'logo', 'link'];

        $items = [];

        for ($i = 1; $i <= 9; $i++) {
            $item = [];
            foreach ($fields as $field) {
                if (isset($config[$field . '_' . $i])) {
                    $item[$field] = $config[$field . '_' . $i];
                }
            }

            $items[] = $item;
        }

        return compact('items');
    }
}
