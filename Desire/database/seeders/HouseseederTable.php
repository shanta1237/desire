<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HouseseederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('houses')->insert([
            'name' => 'Stusy Abroad',
            'aboutdesc'=>'Desire Educational Consultancy (Best Education Consultancy in Kathmandu Nepal for Australia | USA | Ielts Preparation Classes) was established in the locality of Dillibazar, Kathmandu with an aim to provide effective study abroad counseling to the aspiring students who want to learn in excellent environment with multicultural experience and great life style. We provide professional guidance for higher studies in Australia, New Zealand and USA.',
            'a1'=>'Student Counselling',
            'a2'=>'Test Preparation',
            'a3'=>'University Application',
            'a4'=>'Compliance',
            'a5'=>'Interview Assistance',
            'a6'=>'Student Counselling',
            'aphone'=>'977 01-4412344',
            'applynow'=>'Apply Now',
            'applynowques'=>'How to Apply to an International University ?',
            'applynowans'=>'Popular degree subjects in different Country Universities to consider for your studies. Prepare to apply. … Meet the language proficiency requirements. Gather the rest of your university application documents University application deadlines in Abroad Final steps after receiving your acceptance letter.',
            'abroadfocus'=>'Abroad Focus',
            'abroadphoto'=>'',
            'abroaddesc'=>'Desire Educational Consultancy (Best Education Consultancy in Kathmandu Nepal for Australia | USA | Ielts Preparation Classes) was established in the locality of Dillibazar, Kathmandu with an aim to provide effective study abroad counseling to the aspiring students who want to learn in excellent environment with multicultural experience and great lifestyle. We provide professional guidance for higher studies in Australia, New Zealand and USA.',
            'career'=>'Career',
            'careerphoto'=>'',
            'careerdesc'=>'Desire Educational Consultancy (Best Education Consultancy in Kathmandu Nepal for Australia | USA | Ielts Preparation Classes) was established in the locality of Dillibazar, Kathmandu with an aim to provide effective study abroad counseling to the aspiring students who want to learn in excellent environment with multicultural experience and great lifestyle. We provide professional guidance for higher studies in Australia, New Zealand and USA.',
            'test'=>'Test',
            'testphoto'=>'',
            'testdesc'=>'Desire Educational Consultancy (Best Education Consultancy in Kathmandu Nepal for Australia | USA | Ielts Preparation Classes) was established in the locality of Dillibazar, Kathmandu with an aim to provide effective study abroad counseling to the aspiring students who want to learn in excellent environment with multicultural experience and great lifestyle. We provide professional guidance for higher studies in Australia, New Zealand and USA.',
            'env'=>'Environment',
            'envphoto'=>'',
            'envdesc'=>'Desire Educational Consultancy (Best Education Consultancy in Kathmandu Nepal for Australia | USA | Ielts Preparation Classes) was established in the locality of Dillibazar, Kathmandu with an aim to provide effective study abroad counseling to the aspiring students who want to learn in excellent environment with multicultural experience and great lifestyle. We provide professional guidance for higher studies in Australia, New Zealand and USA.',
        ]);
    }
}
