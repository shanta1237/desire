<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AboutusseederTable::class);
        $this->call(OfferseederTable::class);
        $this->call(TestimonialsseederTable::class);
        $this->call(SettingsTableseeder::class);
        $this->call(HouseseederTable::class);
    }
}
