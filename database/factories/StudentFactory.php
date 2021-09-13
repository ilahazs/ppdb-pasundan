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
            // 'kelas' => $this->faker->randomElesment(['1A', '1B', '1C']),
            'telp' => $this->faker->unique()->phoneNumber(),
            'jenis_kelamin' => 'perempuan',
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->date(),
            'religion_id' => mt_rand(1, 5),
            // 'status' => $this->faker->randomElement(['accepted', 'pending']),
            // 'role_id' => 1,
            'regmethod_id' => mt_rand(1, 3),
        ];
    }
}
