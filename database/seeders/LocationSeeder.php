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
            'gambar' => 'https://www.top4top.me/do.php?imgf=top4top_me5ea29de2c1ce0.jpg',
        ]);

        Location::create([
            'nama_lokasi' => 'Jakarta',
            'gambar' => 'https://www.top4top.me/do.php?imgf=top4top_me365cae311a830.jpg',
        ]);

        Location::create([
            'nama_lokasi' => 'Yogyakarta',
            'gambar' => 'https://www.top4top.me/do.php?imgf=top4top_me363e457032f20.jpg',
        ]);

        Location::create([
            'nama_lokasi' => 'Bali',
            'gambar' => 'https://h.top4top.io/p_2931balkl4.jpeg',
        ]);

        Location::create([
            'nama_lokasi' => 'Solo',
            'gambar' => 'https://f.top4top.io/p_29311rvk71.jpg',
        ]);

        Location::create([
            'nama_lokasi' => 'Surabaya',
            'gambar' => 'https://www.top4top.me/do.php?imgf=top4top_mebd81468e69ba0.jpg',
        ]);

        Location::create([
            'nama_lokasi' => 'Semarang',
            'gambar' => 'https://www.top4top.me/do.php?imgf=top4top_me0f208ccc96360.jpg',
        ]);

        Location::create([
            'nama_lokasi' => 'Palembang',
            'gambar' => 'https://www.top4top.me/do.php?imgf=top4top_meb68f2855855a0.jpg',
        ]);

        Location::create([
            'nama_lokasi' => 'Makassar',
            'gambar' => 'https://www.top4top.me/do.php?imgf=top4top_me11af631e3fd30.jpg',
        ]);

        Location::create([
            'nama_lokasi' => 'Surakarta',
            'gambar' => 'https://www.top4top.me/do.php?imgf=top4top_me9d146d2bf7380.jpg',
        ]);
    }
}
