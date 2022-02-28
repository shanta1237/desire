<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferseederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offers')->insert([
            'offer_desc' => 'If you are looking to study in Australia from Nepal and get a visa for travel to Australia, we are here to assist you all the way. Searching for prestigious yet affordable colleges often becomes hectic due to a lack of expert counselling. We can feel such need of the students and make available providers with the best diploma courses offered in Australia for international students. Vocational education is very popular in Australia provided by TAFES and private colleges which is based on a partnership between government and industries. We have an association with prestigious Australian Universities, through which we facilitate potential students enrolment in the best Bachelor and Master degree courses in Australia. These universities offer many grants, scholarships, and bursaries to assist you financially with your studies in Australia.
            If you are looking to study in Australia from Nepal and get a visa for travel to Australia, we are here to assist you all the way. Searching for prestigious yet affordable colleges often becomes hectic due to a lack of expert counselling. We can feel such need of the students and make available providers with the best diploma courses offered in Australia for international students.',
        ]);
    }
}
