<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\Gallery\Models\Gallery;
use Botble\Gallery\Models\GalleryMeta;
use Botble\Slug\Facades\SlugHelper;

class GallerySeeder extends BaseSeeder
{
    public function run(): void
    {
        $this->uploadFiles('galleries');

        Gallery::query()->truncate();
        GalleryMeta::query()->truncate();

        $galleries = [
            'Business',
            'Innovation',
            'Leadership',
            'Technology',
            'Success',
            'Entrepreneurship',
        ];

        $descriptions = [
            'Capturing the essence of corporate endeavors and entrepreneurial spirit.',
            'Showcasing breakthrough ideas, inventions, and creative solutions.',
            'Images that exemplify effective guidance and inspirational leadership.',
            'Exploring the world of cutting-edge tech and digital innovations.',
            'Moments of achievement and triumph in various business contexts.',
            'Visualizing financial strategies, investments, and economic landscapes.',
            'Highlighting strategies to engage, attract, and retain customers.',
            'Strategic planning, decision-making, and goal-oriented visuals.',
            'Images depicting expansion, progress, and business development.',
            'Celebrating the spirit of startups, innovation, and risk-taking.',
            'Efficient organization, team leadership, and operational excellence.',
        ];

        $faker = $this->fake();

        $images = [];

        foreach (range(1, 6) as $i) {
            $images[] = [
                'img' => $this->filePath("galleries/$i.png"),
                'description' => $faker->randomElement($descriptions),
            ];
        }

        foreach ($galleries as $index => $item) {
            $index++;
            $gallery = Gallery::query()->create([
                'user_id' => 1,
                'name' => $item,
                'description' => $faker->randomElement($descriptions),
                'image' => $this->filePath("galleries/$index.png"),
                'is_featured' => true,
            ]);

            SlugHelper::createSlug($gallery);

            GalleryMeta::query()->create([
                'images' => $images,
                'reference_id' => $gallery->getKey(),
                'reference_type' => Gallery::class,
            ]);
        }

        SlugHelper::createSlug($gallery);

        GalleryMeta::query()->create([
            'images' => [
                [
                    'img' => $this->filePath('galleries/1.png'),
                    'description' => $faker->realText(),
                ],
                [
                    'img' => $this->filePath('galleries/2.png'),
                    'description' => $faker->realText(),
                ],
                [
                    'img' => $this->filePath('galleries/3.png'),
                    'description' => $faker->realText(),
                ],
                [
                    'img' => $this->filePath('galleries/4.png'),
                    'description' => $faker->realText(),
                ],
                [
                    'img' => $this->filePath('galleries/5.png'),
                    'description' => $faker->realText(),
                ],
                [
                    'img' => $this->filePath('galleries/6.png'),
                    'description' => $faker->realText(),
                ],
            ],
            'reference_id' => $gallery->getKey(),
            'reference_type' => Gallery::class,
        ]);
    }
}
