<?php

namespace Database\Seeders;

use App\Models\Premision;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PremisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Premision::firstOrCreate([
            'name'      => 'Browse admin',
            'key'       => 'browse_admin',
            'table_name' => null,
        ]);

        Premision::firstOrCreate([
            'name'      => 'Administrator',
            'key'       => 'administrator',
            'table_name' => null,
        ]);

        Premision::firstOrCreate([
            'name'      => 'Banned',
            'key'       => 'banned',
            'table_name' => null,
        ]);

        Premision::generateFor('premisions');
        Premision::generateFor('roles');
        Premision::generateFor('countries');
        Premision::generateFor('cities');
        Premision::generateFor('users');
    }
}
