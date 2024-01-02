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
            'deskripsi' => 'djioaohadoaoho',
            'gambar' => 'pameranbunga.jpg',
            'id_location' => 1,
        ]);
    }
}
