<?php

namespace Database\Seeders;

use App\Models\Pengumuman;
use App\Models\Pengunguman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengumuman::factory(100)->create();
    }
}
