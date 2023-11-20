<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\sector;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sectors = [[
            'name' => 'BFSI',
        ],[
            'name' => 'Logistics, E-commerce & Supply Chain',
        ],[
            'name' => 'Information Technology',
        ],[
            'name' => 'Hospitality and Hotel Management',
        ]];

        foreach ($sectors as $sector) {
            sector::create($sector);
        }
    }
}

// php artisan db:seed --class=SectorSeeder