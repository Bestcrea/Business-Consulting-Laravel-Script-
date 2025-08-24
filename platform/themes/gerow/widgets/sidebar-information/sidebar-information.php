<?php

use Botble\Widget\AbstractWidget;

class SidebarInformationWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('Sidebar Information'),
            'description' => __('Widget description'),
            'address' => null,
            'phone_number' => null,
            'email' => null,
        ]);
    }

    protected function data(): array
    {
        $config = $this->getConfig();

        $phoneNumber =  nl2br($config['phone_number']);
        $email = nl2br($config['email']);
        $address = nl2br($config['address']);

        return compact('phoneNumber', 'email', 'address');
    }
}
