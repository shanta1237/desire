<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'title'=>'Desire Conseltency',
            'meta_description'=>'Desire Conseltency',
            'meta_keywords'=>'Desire Conseltency',
            'logo'=>'assets/images/logo.png',
            'favicon'=>'favicon.png',
            'header_address'=>'Putalisadak, Kathmandu',
            'header_email'=>'admissions@desireedunepal.com',
            'header_phone'=>'+977-4428538',
            'facebook'=>'https://www.facebook.com/desireedunepal',
            'twitter'=>'https://twitter.com/desireedunepal',
            'instagram'=>'https://www.instagram.com/desireedunepal',
            'footer_address'=>'P.O.BOX: 8954, KATHAMNDU, NEPAL, 44600',
            'footer_email'=>'info@desireconsultancy.com',
            'footer_phoneone'=>'+977-984-838-838',
            'footer_phonetwo'=>'+977-984-838-838',
            'footer_phonethree'=>'+977-984-838-838',
            'footer_logo'=>'assets/images/logo-lg.png',
        ]);
    }
}
