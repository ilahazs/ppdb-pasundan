<?php

namespace Database\Seeders;

use App\Models\TahunAjaran;
use Illuminate\Database\Seeder;

class TahunAjaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TahunAjaran::create([
            'nama' => '2021/2022',
        ]);
        TahunAjaran::create([
            'nama' => '2022/203',
        ]);
        TahunAjaran::create([
            'nama' => '2023/2024',
        ]);
    }
}
