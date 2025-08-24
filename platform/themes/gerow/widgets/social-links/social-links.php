<?php

use Botble\Widget\AbstractWidget;

class SocialLinksWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Social Links'),
            'description' => __('Widget display social links network'),
            'content' => '',
            'icon' => '',
            'link_1' => 'https://www.facebook.com/',
            'icon_1' => 'ti ti-brand-facebook',
            'link_2' => 'https://twitter.com/',
            'icon_2' => 'ti ti-brand-x',
            'link_3' => 'https://www.instagram.com/',
            'icon_3' => 'ti ti-brand-instagram',
            'link_4' => 'https://www.pinterest.com/',
            'icon_4' => 'ti ti-brand-pinterest',
        ]);
    }
}
