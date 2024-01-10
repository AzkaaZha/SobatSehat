<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::create([
            'judul' => 'Jalan Santai Bandung',
            'tanggal' => '2023-12-29',
            'isi_berita' => 'djioaohadodgghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhdaoho',
            'gambar' => 'pameranbunga.jpg',
        ]);
    }
}
