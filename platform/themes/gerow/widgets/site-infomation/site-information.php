<?php

use Botble\Widget\AbstractWidget;

class SiteInformationWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Site Information'),
            'description' => null,
            'title' => null,
            'logo' => null,
            'hotline' => null,
            'address' => null,
            'opening_hours' => null,
            'with_social_links' => 'no',
        ]);
    }
}
