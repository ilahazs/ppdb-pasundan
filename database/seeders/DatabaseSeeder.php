<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\StudentAccepted;
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
        $this->call(UserSeeder::class);
        // User::factory(1)->create();
        Student::factory(20)->create();
        $this->call(StatusSeeder::class);
        $this->call(TahunAjaranSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(ReligionSeeder::class);
        $this->call(RegistrationMethodSeeder::class);
    }
}
