<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Admin',
        ]);

        Role::create([
            'name' => 'Manager',
        ]);

        Role::create([
            'name' => 'Employee',
        ]);

        Role::create([
            'name' => 'Visitor',
        ]);

        Role::create([
            'name' => 'Guest',
        ]);

        Role::create([
            'name' => 'Customer',
        ]);

        Role::create([
            'name' => 'Supplier',
        ]);

        Role::create([
            'name' => 'Partner',
        ]);

    }
}
