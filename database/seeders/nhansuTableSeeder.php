<?php

namespace Database\Seeders;

use App\Models\nhansu;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class nhansuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        nhansu::factory()
        ->count(20)
        ->create();
    }
}
