<?php

namespace Database\Seeders;

use App\Models\PathRegistration;
use App\Models\Religion;
use App\Models\Role;
use App\Models\Student;
use App\Models\User;
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
        User::factory(3)->create();
        Student::factory(20)->create();

        Role::create([
            'name' => 'Guest',
        ]);

        PathRegistration::create([
            'name' => 'RMP',
        ]);
        PathRegistration::create([
            'name' => 'Umum',
        ]);
        PathRegistration::create([
            'name' => 'Prestasi',
        ]);

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
