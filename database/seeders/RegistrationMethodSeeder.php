<?php

namespace Database\Seeders;

use App\Models\RegistrationMethod;
use Illuminate\Database\Seeder;

class RegistrationMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RegistrationMethod::create([
            'name' => 'Umum',
        ]);
        RegistrationMethod::create([
            'name' => 'Prestasi',
        ]);
        RegistrationMethod::create([
            'name' => 'RMP',
        ]);
    }
}
