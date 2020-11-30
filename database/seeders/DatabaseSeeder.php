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
            $this->call([
            StateSeeder::class,
            DistrictSeeder::class,
            SubdivisionSeeder::class,
            BlockMuniSeeder::class,
            PoliceStationSeeder::class,
            ParlConstSeeder::class,
            AsmConstSeeder::class,
            CategorySeeder::class,
            InstituteSeeder::class,
            QualificationSeeder::class,
            ElectionSeeder::class,
            UserSeeder::class
        ]);
    }
}
