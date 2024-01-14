<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::create([
            'nama_lokasi' => 'Bandung',
            'gambar' => 'https://e.top4top.io/p_29311frtm1.jpeg',
        ]);

        Location::create([
            'nama_lokasi' => 'Jakarta',
            'gambar' => 'https://g.top4top.io/p_2931psklg3.jpeg',
        ]);

        Location::create([
            'nama_lokasi' => 'Depok',
            'gambar' => 'https://f.top4top.io/p_2931s2kl82.jpeg',
        ]);

        Location::create([
            'nama_lokasi' => 'Bali',
            'gambar' => 'https://h.top4top.io/p_2931balkl4.jpeg',
        ]);

        Location::create([
            'nama_lokasi' => 'Solo',
            'gambar' => 'https://f.top4top.io/p_29311rvk71.jpg',
        ]);
    }
}
