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
            'gambar' => 'bandung.jpg',
        ]);

        Location::create([
            'nama_lokasi' => 'Jakarta',
            'gambar' => 'jakarta.jpg',
        ]);

        Location::create([
            'nama_lokasi' => 'Surabaya',
            'gambar' => 'surabaya.jpg',
        ]);

        Location::create([
            'nama_lokasi' => 'Yogyakarta',
            'gambar' => 'yogyakarta.jpg',
        ]);

        Location::create([
            'nama_lokasi' => 'Surakarta',
            'gambar' => 'surakarta.jpg',
        ]);
    }
}
