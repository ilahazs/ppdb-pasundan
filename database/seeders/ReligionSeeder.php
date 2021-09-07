<?php

namespace Database\Seeders;

use App\Models\Religion;
use Illuminate\Database\Seeder;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Religion::create([
            'name' => 'Islam',
        ]);
        Religion::create([
            'name' => 'Katholik',
        ]);
        Religion::create([
            'name' => 'Protestan',
        ]);
        Religion::create([
            'name' => 'Hindu',
        ]);
        Religion::create([
            'name' => 'Budha',
        ]);
    }
}
