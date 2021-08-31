<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'telp' => $this->faker->unique()->phoneNumber(),
            'jenis_kelamin' => 'perempuan',
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->date(),
            'religion_id' => mt_rand(1, 5),
            'role_id' => 1,
            'path_id' => mt_rand(1, 3),

            // $table->id();
            // $table->foreignId('religion_id');
            // $table->foreignId('role_id');
            // // $table->foreignId('user_id');
            // $table->foreignId('path_id');
            // $table->string('nama');
            // $table->string('telp', 13)->unique();
            // $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            // $table->string('tempat_lahir');
            // $table->date('tanggal_lahir');
        ];
    }
}
