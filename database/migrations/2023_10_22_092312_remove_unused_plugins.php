<?php

use Botble\PluginManagement\Services\PluginService;
use Illuminate\Database\Migrations\Migration;

return new class () extends Migration {
    public function up(): void
    {
        try {
            app(PluginService::class)->remove('simple-slider');
        } catch (Throwable) {
        }
    }
};
