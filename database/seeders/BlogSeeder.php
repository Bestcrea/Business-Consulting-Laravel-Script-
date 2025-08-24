<?php

namespace Database\Seeders;

use Botble\ACL\Models\User;
use Botble\Base\Supports\BaseSeeder;
use Botble\Blog\Models\Category;
use Botble\Blog\Models\Post;
use Botble\Blog\Models\Tag;
use Botble\Media\Facades\RvMedia;
use Botble\Slug\Facades\SlugHelper;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;

class BlogSeeder extends BaseSeeder
{
    public function run(): void
    {
        $this->uploadFiles('news');

        Post::query()->truncate();
        Category::query()->truncate();
        Tag::query()->truncate();

        $faker = $this->fake();

        $categories = [
            [
                'name' => 'Business Strategy',
                'is_default' => true,
            ],
            [
                'name' => 'Market Research',
            ],
            [
                'name' => 'Financial Management',
                'parent_id' => 2,
            ],
            [
                'name' => 'Entrepreneurship',
            ],
            [
                'name' => 'Career Development',
                'parent_id' => 4,
            ],
            [
                'name' => 'Startups',
            ],
            [
                'name' => 'Success Stories',
                'parent_id' => 6,
            ],
            [
                'name' => 'Industry Insights',
                'parent_id' => 6,
            ],
            [
                'name' => 'Human Resources',
                'parent_id' => 6,
            ],
        ];

        foreach ($categories as $index => $item) {
            $item['description'] = $faker->text();
            $item['is_featured'] = ! isset($item['parent_id']) && $index != 0;
            $item['author_id'] = 1;
            $item['author_type'] = User::class;

            $category = Category::query()->create($item);

            SlugHelper::createSlug($category);
        }

        $tags = [
            'Strategy',
            'Marketing',
            'Finance',
            'Management',
            'Networking',
            'Leadership',
            'Technology',
            'Investment',
            'Branding',
            'Sales',
            'Sustainability',
        ];

        foreach ($tags as $item) {
            $tag = Tag::query()->create([
                'name' => $item,
                'author_id' => 1,
                'author_type' => User::class,
            ]);

            SlugHelper::createSlug($tag);
        }

        $posts = [
            '10 Strategies for Business Growth in 2023',
            'Navigating Tax Season: Tips for Small Businesses',
            'The Power of Data Analytics in Business Decision-Making',
            'How to Create a Winning Marketing Plan',
            'Mastering the Art of Financial Planning for Entrepreneurs',
            'The Role of Innovation in Modern Business',
            'Startup Success Stories: Lessons from Industry Leaders',
            'Balancing Act: Work-Life Integration for Business Owners',
            'The Impact of Sustainable Practices on Business Sustainability',
            'Building a Strong Employer Brand for Talent Acquisition',
            'Productivity Hacks for Busy Entrepreneurs',
            'The Human Factor: HR Best Practices for Businesses',
        ];

        $descriptions = [
            'Explore proven strategies and actionable insights to drive growth and thrive in the ever-evolving business landscape of 2023.',
            'Get expert advice on how small businesses can navigate tax season efficiently, minimize liabilities, and stay compliant with tax regulations.',
            'Discover how data analytics can transform decision-making processes, drive innovation, and enhance competitiveness in today’s business world.',
            'Dive into the qualities and strategies of effective leadership that inspire teams, foster growth, and achieve remarkable success.',
            'Learn the essential steps and elements to craft a winning marketing plan that effectively reaches your target audience and drives results.',
            'Gain insights into the art of financial planning tailored to entrepreneurs, helping you secure your financial future and business success.',
            'Explore the significance of innovation in modern business, how it drives competitiveness, and strategies for fostering a culture of innovation.',
            'Hear inspiring stories of startup success and uncover valuable lessons from industry leaders who turned ideas into thriving businesses.',
            'Discover strategies for achieving work-life integration as a business owner, ensuring well-being and productivity in both spheres.',
            'Learn how businesses can leverage technology to gain a competitive edge, streamline operations, and deliver exceptional value to customers.',
        ];

        $users = User::query()->pluck('id')->all();

        foreach ($posts as $index => $item) {
            $post = Post::query()->create([
                'author_id' => Arr::random($users),
                'author_type' => User::class,
                'name' => $item,
                'views' => $faker->numberBetween(100, 2500),
                'is_featured' => $index < 6,
                'image' => $this->filePath(sprintf('news/%s.png', $index + 1)),
                'description' => $faker->randomElement($descriptions),
                'content' => str_replace(
                    'news/',
                    RvMedia::getImageUrl('news/'),
                    File::get(database_path('seeders/contents/post.html'))
                ),
            ]);

            $post->categories()->sync([
                $faker->numberBetween(1, 4),
                $faker->numberBetween(5, 7),
            ]);

            $post->tags()->sync([1, 2, 3]);

            SlugHelper::createSlug($post);
        }
    }
}
