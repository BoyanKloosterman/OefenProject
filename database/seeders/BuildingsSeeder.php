<?php

namespace Database\Seeders;

use App\Models\Building;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuildingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Building::create([
            'name' => 'Hoofdkantoor',
        ]);

        Building::create([
            'name' => 'Gebouw A',
        ]);

        Building::create([
            'name' => 'Gebouw B',
        ]);

        Building::create([
            'name' => 'Gebouw C',
        ]);

        Building::create([
            'name' => 'Etten-Leur',
        ]);

        Building::create([
            'name' => 'Bergen Op Zoom',
        ]);
    }
}
