<?php

namespace Database\Seeders;

use Botble\Base\Facades\MetaBox;
use Botble\Base\Supports\BaseSeeder;
use Botble\Testimonial\Models\Testimonial;
use Illuminate\Support\Arr;

class TestimonialSeeder extends BaseSeeder
{
    public function run(): void
    {
        $this->uploadFiles('testimonials');

        $testimonials = [
            [
                'name' => 'Guy Hawkins',
                'company' => 'Rodriguez Enterprises',
                'content' => 'Exceptional service! Gerow’s attention to detail and reliability have been instrumental in our supply chain success.',
                'title' => 'Satisfied client testimonial',
            ],
            [
                'name' => 'Eleanor Pena',
                'company' => 'ChenTech Solutions',
                'content' => 'Gerow has consistently met and exceeded our logistics needs. Their dedication to excellence is truly commendable.',
                'title' => 'Impressed Customer',
            ],
            [
                'name' => 'Cody Fisher',
                'company' => 'Foster & Co.',
                'content' => 'Their team is a valuable asset to our business operations. Gerow’s efficient service has saved us time and money.',
                'title' => 'Our success stories',
            ],
            [
                'name' => 'Albert Flores',
                'company' => 'Bank of America',
                'content' => 'Gerow’s attention to detail and professionalism have made them our preferred logistics partner. Highly recommended!',
                'title' => 'Preferred Partner',
            ],
        ];

        Testimonial::query()->truncate();

        foreach ($testimonials as $index => $item) {
            $item['image'] = $this->filePath(sprintf('testimonials/%d.png', $index + 1));

            $testimonial = Testimonial::query()->create(Arr::except($item, ['title']));

            MetaBox::saveMetaBoxData($testimonial, 'title', Arr::get($item, 'title'));
            MetaBox::saveMetaBoxData($testimonial, 'star', 5);
        }
    }
}
