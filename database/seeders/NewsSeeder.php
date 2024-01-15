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
            'judul' => '7 Manfaat Senam Pagi bagi Tubuh',
            'tanggal' => '2020-05-27',
            'isi_berita' => 'Sejumlah tenaga medis, relawan dan pasien COVID-19 mengikuti kegiatan senam pagi di Rumah Singgah Karantina COVID-19, Kabupaten Tangerang, Banten, Rabu (27/5/2020). Kegiatan senam rutin yang dilakukan setiap hari pada pukul 08.00 WIB selama 25 menit tersebut diharapkan bisa meningkatkan tingkat imunitas sehingga bisa meningkatkan tingkat kesembuhan pasien COVID-19.',
            'gambar' => 'https://j.top4top.io/p_2936znvy01.jpg',
        ]);

        News::create([
            'judul' => 'Lompat Tali atau Lari, Mana yang Lebih Sehat?',
            'tanggal' => '2024-01-14',
            'isi_berita' => 'Lompat tali dan lari adalah jenis olahraga kardio yang dapat memberikan banyak manfaat untuk kesehatan. Namun, di antara lompat tali atau lari, mana yang lebih sehat? Ternyata, lompat tali dan lari memiliki manfaat yang berbeda untuk kesehatan sehingga Anda bisa memilih salah satu jenis olahraga yang sesuai kebutuhan. Meskipun begitu, lompat tali dan lari dapat menurunkan lemak tubuh dan meningkatkan kesehatan jantung.',
            'gambar' => 'https://l.top4top.io/p_2936wfehl1.jpg',
        ]);

        News::create([
            'judul' => 'Manfaat Olahraga bagi Kesehatan Manusia dan Rekomendasi Durasinya',
            'tanggal' => '2021-09-22',
            'isi_berita' => 'Manfaat olahraga bagi kesehatan manusia sangat penting dalam upaya menjaga kesehatan. Tahukah kamu apa saja manfaat olahraga?

            Manfaat olahraga bagi Kesehatan yaitu mengurangi risiko terkena serangan jantung, menjaga berat badan, menurunkan tekanan darah. Dilansir dari Centers of Disease Control and Prevention (CDC), idealnya seseorang harus aktif berolahraga selama 150 menit dalam seminggu.',
            'gambar' => 'https://a.top4top.io/p_2936qhatr2.jpg',
        ]);

        News::create([
            'judul' => 'Dibandingkan Sore atau Malam, Olahraga di Pagi Hari Lebih Efektif Turunkan Berat Badan',
            'tanggal' => '2023-12-09',
            'isi_berita' => 'Sebuah studi baru menemukan, berolahraga di pagi hari dapat membantu mengelola berat badan dengan lebih baik.

            Studi yang diterbitkan pada September 2023 di Obesity, menemukan bahwa orang yang berolahraga antara jam 7 pagi dan 9 pagi mampu mengelola dan menjaga berat badan dengan lebih baik daripada mereka yang melakukan olahraga di sore atau malam hari seperti dikutip dari Health pada Selasa, (5/12/2023).',
            'gambar' => 'https://c.top4top.io/p_2936csk7a3.jpg',
        ]);

        News::create([
            'judul' => '6 Jenis Olahraga yang Cocok Buat Si Introvert',
            'tanggal' => '2023-11-26',
            'isi_berita' => 'Olahraga adalah salah satu hal yang wajib dilakukan agar tubuh sehat dan bbugar. Sebagian orang bersemangat jika melakukan olahraga bareng-bareng tapi ada juga yang lebih nyaman jika sendirian.

            Bagi yang mempunyai kepribadian introvert, biasanya lebih memilih olahraga sendirian dan tidak ramai. Jika Anda termasuk kaum tersebut, tidak perlu khawatir. Ada beberapa jenis olahraga yang bisa dilakukan sendirian.',
            'gambar' => 'https://d.top4top.io/p_2936xp9y34.jpg',
        ]);

        News::create([
            'judul' => 'Bedanya Olahraga Pagi dan Sore, Ini Efek Kesehatannya Untuk Tubuh',
            'tanggal' => '2022-07-14',
            'isi_berita' => 'Bagi setiap orang mempunya preferensi masing – masing apakah lebih baik olahraga itu dilakukan pada saat pagi hari atau sore hari. Kebanyakan orang mengetahui bahwa olahraga pagi itu lebih baik, namun sebagian orang yang melakukan aktifitas kerja di pagi hari tidak sempat untuk berolahraga pagi dan memilih untuk berolahraga pada sore hari.

            Berolahraga di pagi hari mampu meningkatkan respon metabolisme tubuh ke otot, sedangkan kalau berolahraga pada sore hari mampu meningkatkan energi yang ada di dalam tubuh untuk nantinya di simpan dan digunakan dalam jangka waktu yang panjang saat melakukan aktifitas.',
            'gambar' => 'https://e.top4top.io/p_29369gajx5.jpg',
        ]);
    }
}
