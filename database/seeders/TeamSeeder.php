<?php

namespace Database\Seeders;

use Botble\ACL\Models\User;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Facades\Html;
use Botble\Base\Supports\BaseSeeder;
use Botble\Slug\Facades\SlugHelper;
use Botble\Team\Models\Team;
use Illuminate\Support\Arr;

class TeamSeeder extends BaseSeeder
{
    public function run(): void
    {
        $files = $this->uploadFiles('teams');

        $content =
            Html::tag('div', '[team-skill title="My Expertise & Skills" description="We are united by a shared passion for excellence and a commitment to providing innovative solutions for your business needs. Get to know the faces driving our success and learn how their expertise can contribute to yours." quantity="3" title_1="Finance Consultancy" index_1="65" title_2="Business" index_2="80" title_3="Marketing" index_3="90"][/team-skill]') .
            Html::tag('p', 'Our diverse team of experts brings a wealth of knowledge and experience across various industries. We are united by a shared passion for excellence and a commitment to providing innovative solutions for your business needs. Get to know the faces driving our success and learn how their expertise can contribute to yours.');

        $teams = [
            [
                'name' => 'Brooklyn Simmons',
                'title' => 'Founder / CEO',
                'location' => 'USA',
                'phone' => '0888952423',
                'email' => 'simonss@gmail.com',
                'address' => '22301 Havard BLVD Torrance CA',
                'photo' => $this->filePath('teams/3-1.png'),
            ],
            [
                'name' => 'Jenny Wilson',
                'title' => 'Finance Advisor',
                'location' => 'Qatar',
                'phone' => '009744848000',
                'email' => 'jenniwilson152@gmail.com',
                'address' => 'West Bay Lagoon, P.O',
                'photo' => $this->filePath('teams/3-2.png'),
            ],
            [
                'name' => 'Devon Lane',
                'title' => 'Sales Agent',
                'location' => 'India',
                'phone' => '01123259241',
                'email' => 'devonsoland111@gmail.com',
                'address' => '4855, 24, Ansari Road, Darya Ganj',
                'photo' => $this->filePath('teams/3-3.png'),
            ],
            [
                'name' => 'Marvin McKinney',
                'title' => 'Business Manager',
                'location' => 'Thailand',
                'phone' => '6623742088',
                'email' => 'marvinkensy@gmail.com',
                'address' => '849 Sukhapibal 1 Klong Chan Bang Kapi',
                'photo' => $this->filePath('teams/3-4.png'),
            ],
        ];

        Team::query()->truncate();

        $description = 'Sharing content online allows you to craft an online persona that reflects your personal values and professional skills. Even if you only use social media occasionally';

        foreach ($teams as $item) {
            $item['content'] = $content;
            $item['socials'] = [
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'instagram' => 'https://www.instagram.com/',
            ];

            $item['status'] = BaseStatusEnum::PUBLISHED;

            $item['description'] = $description;

            $team = Team::query()->create($item);

            SlugHelper::createSlug($team);
        }

        foreach (User::query()->get() as $user) {
            $user->avatar_id = Arr::random($files)['data']->id;
            $user->save();
        }
    }
}
