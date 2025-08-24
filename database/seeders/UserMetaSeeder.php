<?php

namespace Database\Seeders;

use Botble\ACL\Models\User;
use Botble\Base\Facades\MetaBox;
use Illuminate\Database\Seeder;

class UserMetaSeeder extends Seeder
{
    public function run(): void
    {
        $metadata = [
            [
                'display_name' => 'Rosalina William',
            ],
            [
                'display_name' => 'Josh De Bryn',
            ],
        ];

        foreach ($metadata as $index => $data) {
            $user = User::query()->skip($index)->first();

            if (! $user) {
                continue;
            }

            foreach ($data as $key => $value) {
                MetaBox::saveMetaBoxData($user, $key, $value);
            }
        }
    }
}
