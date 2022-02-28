<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutusseederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_us')->insert([
            'about' => 'Desire Education Consultancy',
            'desc'=>'Desire Educational Consultancy (Best Education Consultancy in Kathmandu Nepal for Australia | USA | Ielts Preparation Classes) was established in the locality of Dillibazar, Kathmandu with an aim to provide effective study abroad counseling to the aspiring students who want to learn in excellent environment with multicultural experience and great life style. We provide professional guidance for higher studies in Australia, New Zealand and USA.',
            'mission'=>'Mission & visson',
            'descmission'=>'Desire Educational Consultancy (Best Education Consultancy in Kathmandu Nepal for Australia | USA | Ielts Preparation Classes) was established in the locality of Dillibazar, Kathmandu with an aim to provide effective study abroad counseling to the aspiring students who want to learn in excellent environment with multicultural experience and great lifestyle. We provide professional guidance for higher studies in Australia, New Zealand and USA.',
            'choose'=>'Why Choose Desire Education ?',
            'descchoose'=>'Desire Educational Consultancy (Best Education Consultancy in Kathmandu Nepal for Australia | USA | Ielts Preparation Classes) was established in the locality of Dillibazar, Kathmandu with an aim to provide effective study abroad counseling to the aspiring students who want to learn in excellent environment with multicultural experience and great lifestyle. We provide professional guidance for higher studies in Australia, New Zealand and USA.',
            'message'=>'Message from M.D',
            'descmessage'=>'Desire Educational Consultancy (Best Education Consultancy in Kathmandu Nepal for Australia | USA | Ielts Preparation Classes) was established in the locality of Dillibazar, Kathmandu with an aim to provide effective study abroad counseling to the aspiring students who want to learn in excellent environment with multicultural experience and great lifestyle. We provide professional guidance for higher studies in Australia, New Zealand and USA.',
        ]);
    }
}
