<?php

use Illuminate\Database\Seeder;

class SiteOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_options')->insert([
            'phone1' => '+7 (964) 184 71 44',
            'phone2' => '+7 (965) 841 53 64',
            'email' => 'PAROVOZDIGITAL@GMAIL.COM',
            'emailTo' => 'jack123456789@mail.ru',
            'title' => 'DIGITAL АГЕНСТВО PAROVOZ',
            'description' => 'Parovoz',
            'keywords' => 'Parovoz',
            'viber' => 'Parovoz',
            'whatsapp' => 'Parovoz',
            'skype' => '',
            'vk' => 'Parovoz',
            'instagram' => 'Parovoz'
        ]);
    }
}
