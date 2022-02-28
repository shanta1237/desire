<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialsseederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'name' => 'Shishir Bhandari',
            'desc'=>'Desire Educational Consultancy (Best Education Consultancy in Kathmandu Nepal for Australia | USA | Ielts Preparation Classes) was established in the locality of Dillibazar, | USA | Ielts Preparation.',
            'photo'=>'/storage/files/1/Rectangle-80.png',
            'status'=>'active',
        ]);
    }
}
