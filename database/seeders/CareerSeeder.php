<?php

namespace Database\Seeders;

use ArchiElite\Career\Models\Career;
use Botble\Base\Facades\MetaBox;
use Botble\Base\Supports\BaseSeeder;
use Botble\Slug\Facades\SlugHelper;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;

class CareerSeeder extends BaseSeeder
{
    public function run(): void
    {
        Career::query()->truncate();

        $this->uploadFiles('careers');

        $careers = [
            [
                'name' => 'Senior Full Stack Engineer, Creator Success Full Time',
                'description' => 'Constantly changing work patterns and norms, and the need for organizational resiliency',
                'image' => 'careers/background-image.jpg',
            ],
            [
                'name' => 'Data Science Specialist, Analytics Division',
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla',
                'image' => 'careers/background-image.jpg',
            ],
            [
                'name' => 'Product Marketing Manager, Growth Team',
                'description' => 'Crafting compelling marketing strategies to drive user acquisition and retention',
                'image' => 'careers/background-image.jpg',
            ],
            [
                'name' => 'UX/UI Designer, User Experience Team',
                'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'image' => 'careers/background-image.jpg',
            ],
            [
                'name' => 'Operations Manager, Supply Chain Division',
                'description' => 'Ensuring smooth and efficient supply chain operations for timely product delivery',
                'image' => 'careers/background-image.jpg',
            ],
            [
                'name' => 'Financial Analyst, Investment Group',
                'description' => 'Analyzing market trends and investment opportunities for optimal financial outcomes',
                'image' => 'careers/background-image.jpg',
            ],
        ];

        foreach ($careers as $index => $item) {
            $index++;

            $career = Career::query()->create(array_merge(Arr::except($item, ['image', 'icon']), [
                'location' => "{$this->fake()->city()}, {$this->fake()->country()}",
                'salary' => number_format($this->fake()->numberBetween(500, 10000)),
                'content' => File::get(database_path('/seeders/contents/career-detail.html')),
            ]));

            MetaBox::saveMetaBoxData($career, 'image', $item['image']);
            MetaBox::saveMetaBoxData($career, 'icon', "careers/$index.png");
            MetaBox::saveMetaBoxData($career, 'apply_url', '/contact');

            SlugHelper::createSlug($career);
        }
    }
}
