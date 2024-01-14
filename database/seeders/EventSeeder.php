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
            'nama_event' => 'BSI FLASH 2024',
            'tanggal' => '2024-06-23',
            'deskripsi' => 'Universitas BSI (Bina Sarana Informatika) dengan bangga mengumumkan kembali BSI FLASH (Festival & Liga Antar Siswa Sekolah SMA/SMK/MA Sederajat Se-Indonesia) 2024, yakni kompetisi olahraga yang diadakan untuk mendorong semangat kompetitif dan kebersamaan di antara mahasiswa se-Indonesia. Acara ini akan berlangsung di Sport Center Universitas BSI di kampus Bekasi.

            BSI FLASH 2023 menampilkan serangkaian kompetisi olahraga yang menarik, yang terdiri dari Futsal Competition pada 19-20 Juni 2024, Basketball Competition pada 23-24 Juni 2024, dan Volleyball Competition pada 23-24 Juni 2024. Total hadiah senilai 35 juta rupiah akan diberikan kepada pemenang-pemenang yang berprestasi.
            
            Kepala Bagian Marketing and Communication (Marcomm) Universitas BSI Deni Gunawan mengatakan BSI FLASH 2024 merupakan ajang yang ditujukan bagi para siswa SMA/SMK/MA untuk berkompetisi dalam olahraga dan menunjukkan bakat serta keterampilan mereka.',
            'gambar' => 'https://b.top4top.io/p_2931gq3bb1.jpeg',
            'id_location' => 2,
        ]);

        Event::create([
            'nama_event' => 'Sporter Bali Triathlon',
            'tanggal' => '2024-02-25',
            'deskripsi' => 'Sportel Bali Triathlon 2024 bakal digelar pada 25 Februari mendatang dengan serangkaian kegiatan menarik. Ajang olahraga serbaguna ini merupakan kolaborasi antara Transvision, Pandara Sports, dan Java Festival Production.
            Kompetisi triathlon akan dilaksanakan di kawasan Jimbaran, Bali yang mengajak para peserta menikmati pemandangan indah alam Bali sambil mengikuti lomba menantang untuk merebut gelar juara.
            
            Terdapat tiga paket pilihan bagi para peserta Sportel Triathlon Bali 2024. Sprint Distance dengan harga Rp2.063.000, paket Standard Distance seharga Rp2.635.000, dan paket Standard Distance Relay dengan harga Rp5.265.000.

            Harga tersebut sudah termasuk untuk mendapatkan medali pemenang dan/atau finisher, serta race pack eksklusif. Selain itu, para peserta juga memiliki kesempatan untuk memenangkan hadiah-hadiah bernilai ratusan juta rupiah.

            Pendaftaran Sportel Triathlon Bali 2024 bisa dilakukan dengan klik link berikut. Kompetisi olahraga triathlon ini terbuka untuk semua peserta, tanpa memandang usia maupun tingkat pengalaman.',
            
            'gambar' => 'https://c.top4top.io/p_2931iwb341.jpeg',
            'id_location' => 4,
        ]);

        Event::create([
            'nama_event' => 'Senam Pagi',
            'tanggal' => '2024-12-01',
            'deskripsi' => 'deskripsi senam pagi',
            'gambar' => 'https://c.top4top.io/p_2931it7ax1.jpeg',
            'id_location' => 5,
        ]);

        Event::create([
            'nama_event' => 'Senam Aerobik',
            'tanggal' => '2024-12-29',
            'deskripsi' => 'deskripsi senam aerobik',
            'gambar' => 'https://d.top4top.io/p_2931z8s162.jpeg',
            'id_location' => 1,
        ]);
    }
}
