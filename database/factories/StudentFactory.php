<?php

namespace Database\Factories;

use App\Models\Student;
use Carbon\Carbon;
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
        $tgl_lahir = $this->faker->date($format = 'Y-m-d', $max = 'now');
        return [
            'nama' => $this->faker->name(),
            // 'kelas' => $this->faker->randomElesment(['1A', '1B', '1C']),
            'telp' => $this->faker->unique()->phoneNumber(),
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $tgl_lahir,

            // 'usia' => $this->faker->randomElement([16, 17, 18, 19]),
            'usia' => Carbon::parse($tgl_lahir)->age,
            'religion_id' => mt_rand(1, 5),
            // 'status' => $this->faker->randomElement(['accepted', 'pending']),
            'regmethod_id' => mt_rand(1, 3),
        ];
    }
}
