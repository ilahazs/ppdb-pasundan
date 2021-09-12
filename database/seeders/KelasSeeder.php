<?php

namespace Database\Seeders;

use App\Models\Class;
use App\Models\Kelas;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::create([
            'name' => '1A',
        ]);
        Kelas::create([
            'name' => '1B',
        ]);
        Kelas::create([
            'name' => '1C',
        ]);
    }
}
