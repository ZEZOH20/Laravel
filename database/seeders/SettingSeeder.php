<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create(
            [
               'email'=>'zieadhammad15@gmail.com',
               'phone'=>'01009547239',
               'facebook'=>'https://www.facebook.com/',
               'twitter'=>'https://twitter.com/login/',
               'instagram'=>'https://www.instagram.com/',
               'linked_in'=>'https://www.linkedin.com/',
            ]
        );
    }
}
