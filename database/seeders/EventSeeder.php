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
            'nama_event' => 'Senam Aerobik',
            'tanggal' => '2024-12-29',
            'deskripsi' => 'Bergabunglah dalam serangkaian energi positif dan keseruan fitness di event Senam Aerobik di Bandung! event ini menawarkan pengalaman senam yang menyenangkan dan mendinamis, dirancang untuk meningkatkan kebugaran fisik dan kesehatan secara keseluruhan. Diiringi oleh instruktur berpengalaman, peserta akan menikmati sesi senam aerobik yang penuh semangat dengan irama musik yang memotivasi. Dengan latar belakang kota Bandung yang indah, para peserta dapat merasakan semangat kebugaran sambil menikmati udara segar dan kebersamaan dalam komunitas fitness yang aktif. event Senam Aerobik di Bandung menjadi kesempatan yang sempurna untuk melepaskan stres, merayakan kesehatan, dan merasakan kegembiraan bersama dalam perjalanan kebugaran. Ayo bergabung dan rasakan getaran positifnya!',
            'gambar' => 'https://asset-2.tstatic.net/jabar/foto/bank/images/zumba_20171211_131313.jpg',
            'id_location' => 1,
        ]);

        Event::create([
            'nama_event' => 'Bandung Street Soccer Fiesta',
            'tanggal' => '2024-07-07',
            'deskripsi' => 'Turnamen sepak bola jalanan yang memeriahkan suasana kota. Tim-tim lokal bersaing dalam pertandingan yang dinamis dan penuh semangat di jalanan Bandung. Event ini mempromosikan olahraga dan kebersamaan dalam komunitas sepak bola setempat.',
            'gambar' => 'https://fornasindonesia.files.wordpress.com/2011/10/img_7395-2.jpg',
            'id_location' => 1,
        ]);

        Event::create([
            'nama_event' => 'Bandung Mountain Trail Run',
            'tanggal' => '2024-05-11',
            'deskripsi' => 'Lomba lari trail yang menantang peserta untuk menjelajahi keindahan alam di sekitar Bandung, termasuk perbukitan dan jalur berliku. Dengan pemandangan alam yang memukau, event ini menggabungkan olahraga lari dengan pengalaman petualangan alam yang mendalam.',
            'gambar' => 'https://img.okezone.com/content/2018/11/11/406/1976172/terima-tantangan-zinc-ribuan-runners-birukan-ciwidey-tdkQOeL42h.jpg',
            'id_location' => 1,
        ]);

        Event::create([
            'nama_event' => 'BSI FLASH 2024',
            'tanggal' => '2024-06-23',
            'deskripsi' => 'Universitas BSI (Bina Sarana Informatika) dengan bangga mengumumkan kembali BSI FLASH (Festival & Liga Antar Siswa Sekolah SMA/SMK/MA Sederajat Se-Indonesia) 2024, yakni kompetisi olahraga yang diadakan untuk mendorong semangat kompetitif dan kebersamaan di antara mahasiswa se-Indonesia. event ini akan berlangsung di Sport Center Universitas BSI di kampus Bekasi.

            BSI FLASH 2023 menampilkan serangkaian kompetisi olahraga yang menarik, yang terdiri dari Futsal Competition pada 19-20 Juni 2024, Basketball Competition pada 23-24 Juni 2024, dan Volleyball Competition pada 23-24 Juni 2024. Total hadiah senilai 35 juta rupiah akan diberikan kepada pemenang-pemenang yang berprestasi.

            Kepala Bagian Marketing and Communication (Marcomm) Universitas BSI Deni Gunawan mengatakan BSI FLASH 2024 merupakan ajang yang ditujukan bagi para siswa SMA/SMK/MA untuk berkompetisi dalam olahraga dan menunjukkan bakat serta keterampilan mereka.',
            'gambar' => 'https://b.top4top.io/p_2931gq3bb1.jpeg',
            'id_location' => 2,
        ]);

        Event::create([
            'nama_event' => 'Jakarta Fun Run',
            'tanggal' => '2024-05-29',
            'deskripsi' => 'Sambut keceriaan dan semangat kebugaran bersama di Jakarta Fun Run!

            Event ini merupakan lari santai yang mengundang masyarakat Jakarta untuk bergabung dalam suatu pengalaman lari yang penuh kegembiraan. Dengan rute yang melewati pemandangan ikonik dan landmark kota Jakarta, peserta dapat menikmati perjalanan sehat sambil merasakan energi positif dari sesama peserta dan pendukung di sepanjang jalan. Dengan suasana yang penuh semangat dan musik yang mengiringi, Jakarta Fun Run tidak hanya menjadi kesempatan untuk meningkatkan kebugaran fisik, tetapi juga merayakan kebersamaan dalam komunitas yang peduli akan kesehatan dan kebahagiaan bersama. Ayo, ikut serta dalam keseruan Jakarta Fun Run dan buatlah kenangan positif sepanjang perjalanan lari ini!',
            'gambar' => 'https://www.top4top.me/do.php?imgf=top4top_me6bd63f4242370.jpg',
            'id_location' => 2,
        ]);

        Event::create([
            'nama_event' => 'Jakarta Cycling Festival',
            'tanggal' => '2024-09-15',
            'deskripsi' => 'Festival sepeda yang menarik peserta dari berbagai kalangan untuk menjelajahi sejumlah rute menarik di sekitar kota.',
            'gambar' => 'https://eventguide.id/wp-content/uploads/2022/04/Cycling-1ok.jpg',
            'id_location' => 2,
        ]);

        Event::create([
            'nama_event' => 'Jakarta Sports Carnival',
            'tanggal' => '2024-08-17',
            'deskripsi' => 'event olahraga yang menghadirkan berbagai cabang olahraga dan kegiatan menarik lainnya untuk masyarakat Jakarta.',
            'gambar' => 'https://g.top4top.io/p_2931z8s162.jpeg',
            'id_location' => 2,
        ]);

        Event::create([
            'nama_event' => 'Yogyakarta Marathon',
            'tanggal' => '2024-11-11',
            'deskripsi' => 'Yogyakarta Marathon 2024 adalah event lari yang mengajak masyarakat Yogyakarta untuk berpartisipasi dalam perjalanan lari yang menyenangkan dan bermanfaat. Dengan rute yang melewati pemandangan ikonik dan landmark kota Yogyakarta, peserta dapat menikmati perjalanan sehat sambil merasakan energi positif dari sesama peserta dan pendukung di sepanjang jalan. Dengan suasana yang penuh semangat dan musik yang mengiringi, Yogyakarta Marathon tidak hanya menjadi kesempatan untuk meningkatkan kebugaran fisik, tetapi juga merayakan kebersamaan dalam komunitas yang peduli akan kesehatan dan kebahagiaan bersama. Ayo, ikut serta dalam keseruan Yogyakarta Marathon dan buatlah kenangan positif sepanjang perjalanan lari ini!',
            'gambar' => 'https://imgcdn.solopos.com/@space/2022/08/maraton2.jpg',
            'id_location' => 3,
        ]);

        Event::create([
            'nama_event' => 'Yogyakarta Heritage Cycling Tour',
            'tanggal' => '2024-10-10',
            'deskripsi' => 'Tur sepeda melalui berbagai situs warisan budaya dan sejarah di sekitar Yogyakarta. Peserta dapat menikmati keindahan kota dengan rute yang mengunjungi keraton, candi, dan jalan-jalan bersejarah, menciptakan pengalaman bersepeda yang edukatif dan menyenangkan.

            Event ini merupakan lari santai yang mengundang masyarakat Yogyakarta untuk bergabung dalam suatu pengalaman lari yang penuh kegembiraan. Dengan rute yang melewati pemandangan ikonik dan landmark kota Yogyakarta, peserta dapat menikmati perjalanan sehat sambil merasakan energi positif dari sesama peserta dan pendukung di sepanjang jalan. Dengan suasana yang penuh semangat dan musik yang mengiringi, Yogyakarta Fun Run tidak hanya menjadi kesempatan untuk meningkatkan kebugaran fisik, tetapi juga merayakan kebersamaan dalam komunitas yang peduli akan kesehatan dan kebahagiaan bersama. Ayo, ikut serta dalam keseruan Yogyakarta Fun Run dan buatlah kenangan positif sepanjang perjalanan lari ini!',
            'gambar' => 'https://warta.jogjakota.go.id/assets/instansi/warta/article/20231021185939.jpeg',
            'id_location' => 3,
        ]);

        Event::create([
            'nama_event' => 'Yogyakarta Yoga Festival',
            'tanggal' => '2024-04-14',
            'deskripsi' => 'Festival yoga yang menarik peserta dari berbagai tingkatan keterampilan yoga. Event ini mencakup kelas-kelas yoga, lokakarya, dan sesi meditasi di tempat-tempat indah di sekitar Yogyakarta, menciptakan atmosfer yang damai dan penuh kebahagiaan.',
            'gambar' => 'https://www.travelxism.com/destinasi-image/detail/1701175815897-Jogja-Cultural-Wellness-Festival.jpg',
            'id_location' => 3,
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
            'nama_event' => 'Bali International Dragon Boat Festival',
            'tanggal' => '2024-03-03',
            'deskripsi' => 'Festival perahu naga yang menarik peserta dari berbagai negara untuk bersaing dalam lomba perahu naga. Event ini mencakup berbagai kegiatan menarik, seperti pertunjukan budaya, pameran, dan konser musik.',
            'gambar' => 'https://cdn.antaranews.com/cache/1200x800/2022/09/23/IMG-20220923-WA0039.jpg',
            'id_location' => 4,
        ]);

        Event::create([
            'nama_event' => 'Senam Pagi',
            'tanggal' => '2024-12-01',
            'deskripsi' => 'Senam Pagi di Solo adalah kegiatan yang mengajak masyarakat Solo untuk bersama-sama menikmati kebugaran fisik dan kesehatan mental melalui rangkaian senam pagi yang menyegarkan. Diadakan secara teratur, event ini memberikan kesempatan bagi peserta untuk merasakan energi positif dan semangat kebersamaan sambil melibatkan diri dalam gerakan-gerakan senam yang disesuaikan untuk semua tingkatan kebugaran. Dengan latar belakang keindahan kota Solo, peserta dapat menikmati udara segar dan memulai hari dengan penuh semangat melalui aktivitas ini. event Senam Pagi di Solo tidak hanya menjadi ajang untuk meningkatkan kesehatan fisik, tetapi juga menjadi wadah untuk mempererat ikatan sosial dalam komunitas yang peduli akan kesejahteraan bersama.',
            'gambar' => 'https://g.top4top.io/p_2931z8s162.jpeg',
            'id_location' => 5,
        ]);

        Event::create([
            'nama_event' => 'Surabaya Water Adventure',
            'tanggal' => '2024-07-17',
            'deskripsi' => 'Event petualangan air yang melibatkan kegiatan seperti dayung, selancar angin, dan snorkeling di sekitar pantai Surabaya.',
            'gambar' => 'https://www.top4top.me/do.php?imgf=top4top_me0f64af9c6abb0.jpg',
            'id_location' => 6,
        ]);
    }
}
