<?php

namespace Database\Seeders;

use ArchiElite\Announcement\Models\Announcement;
use Botble\Base\Supports\BaseSeeder;
use Botble\Setting\Facades\Setting;

class AnnouncementSeeder extends BaseSeeder
{
    public function run(): void
    {
        Announcement::query()->truncate();

        $announcements = [
            'Exclusive Limited-Time Offers for Entrepreneurs: Unlock Big Savings on Essential Business Tools Today',
            'Calling all Startups! Don\'t Miss Out on Our Special Discounts for Business Software and Services - Act Fast!',
            'Attention Small Business Owners: Score Big Savings on Marketing Solutions and Growth Strategies - Limited Time Offer!',
        ];

        $now = $this->now();

        foreach ($announcements as $key => $value) {
            Announcement::query()->create([
                'name' => sprintf('Announcement %s', $key + 1),
                'content' => $value,
                'start_date' => $now,
                'dismissible' => true,
            ]);
        }

        $settings = [
            'announcement_max_width' => '1280',
            'announcement_text_color' => '#00194C',
            'announcement_background_color' => '#FFE7BB',
            'announcement_text_alignment' => 'start',
            'announcement_dismissible' => '1',
        ];

        Setting::delete(array_keys($settings));

        Setting::set($settings)->save();
    }
}
