<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'nama_event' => 'Jalan Santai Bandung',
            'tanggal' => '2023-12-29',
            'deskripsi' => 'deskripsi jalan santai bandung',
            'gambar' => 'js_bandung.jpg',
            'id_location' => 1,
        ]);

        Event::create([
            'nama_event' => 'Tour de Borobudur',
            'tanggal' => '2024-08-03',
            'deskripsi' => 'deskripsi tour de borobudur',
            'gambar' => 'tdb.jpg',
            'id_location' => 5,
        ]);

        Event::create([
            'nama_event' => 'Senam Pagi',
            'tanggal' => '2024-12-01',
            'deskripsi' => 'deskripsi senam pagi',
            'gambar' => 'https://i.top4top.io/p_2931w1voq1.jpeg',
            'id_location' => 8,
        ]);

        Event::create([
            'nama_event' => 'Senam Aerobik',
            'tanggal' => '2024-12-29',
            'deskripsi' => 'deskripsi senam aerobik',
            'gambar' => 'https://bit.ly/3tDmqiF-senam-aerobik',
            'id_location' => 3,
        ]);
    }
}
