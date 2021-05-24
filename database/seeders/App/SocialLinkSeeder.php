<?php
namespace Database\Seeders\App;

use Illuminate\Database\Seeder;
use App\Models\App\User\SocialLink;

class SocialLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $socialLinks = [
            [
                'name' => 'facebook',
                'icon' => 'facebook',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'twitter',
                'icon' => 'twitter',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'linkedin',
                'icon' => 'linkedin',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'behance',
                'icon' => 'behance',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'instagram',
                'icon' => 'instagram',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'youtube',
                'icon' => 'youtube',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'dribble',
                'icon' => 'dribble',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'google_plus',
                'icon' => 'google-plus',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'skype',
                'icon' => 'skype',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'pinterest',
                'icon' => 'pinterest',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        SocialLink::query()->insert($socialLinks);
    }
}
