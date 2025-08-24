<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\Blog\Models\Category;
use Botble\Blog\Models\Post;
use Botble\Setting\Facades\Setting;
use Botble\Slug\Facades\SlugHelper;
use Botble\Slug\Models\Slug;

class SettingSeeder extends BaseSeeder
{
    public function run(): void
    {
        $settings = [
            'admin_logo' => $this->filePath('general/logo-white.png'),
            'admin_favicon' => $this->filePath('general/favicon.png'),
            SlugHelper::getPermalinkSettingKey(Post::class) => 'blog',
            SlugHelper::getPermalinkSettingKey(Category::class) => 'blog',
            'announcement_lazy_loading' => 1,
        ];

        Setting::delete(array_keys($settings));

        Setting::set($settings)->save();

        Slug::query()->where('reference_type', Post::class)->update(['prefix' => 'blog']);
        Slug::query()->where('reference_type', Category::class)->update(['prefix' => 'blog']);
    }
}
