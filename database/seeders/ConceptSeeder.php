<?php

namespace Database\Seeders;

use App\Models\Concept;
use Illuminate\Database\Seeder;

class ConceptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $concepts = [
            [
                'slug' => 'sensing',
                'title' => 'Sensing',
                'image_path' => 'sensing-hero.jpeg',
                'content' => '<h2>Tentang Sensing</h2><p>Sensing adalah salah satu dari lima dimensi STIFIn yang menggambarkan cara seseorang dalam memproses informasi melalui indera fisik dan pengalaman konkret.</p><h3>Karakteristik Sensing:</h3><ul><li>Berorientasi pada detail dan fakta</li><li>Mengutamakan pengalaman nyata</li><li>Praktis dan realistis</li><li>Fokus pada masa kini</li><li>Menggunakan indera untuk memahami dunia</li></ul><h3>Kekuatan Sensing:</h3><p>Orang dengan dominasi Sensing memiliki kemampuan untuk:</p><ul><li>Mengamati detail dengan teliti</li><li>Mengingat informasi faktual dengan baik</li><li>Bekerja dengan data konkret</li><li>Menerapkan solusi praktis</li><li>Menangani tugas-tugas rutin dengan baik</li></ul>'
            ],
            [
                'slug' => 'thinking',
                'title' => 'Thinking',
                'image_path' => 'cover.png',
                'content' => '<h2>Tentang Thinking</h2><p>Thinking adalah dimensi STIFIn yang menggambarkan cara seseorang dalam memproses informasi melalui analisis logis dan penalaran objektif.</p><h3>Karakteristik Thinking:</h3><ul><li>Berorientasi pada logika dan analisis</li><li>Mengutamakan objektivitas</li><li>Sistematis dan terstruktur</li><li>Fokus pada efisiensi dan hasil</li><li>Menggunakan data untuk pengambilan keputusan</li></ul><h3>Kekuatan Thinking:</h3><p>Orang dengan dominasi Thinking memiliki kemampuan untuk:</p><ul><li>Menganalisis masalah secara mendalam</li><li>Mengambil keputusan berdasarkan data</li><li>Mengembangkan strategi yang efektif</li><li>Mengevaluasi kinerja secara objektif</li><li>Memecahkan masalah kompleks</li></ul>'
            ],
            [
                'slug' => 'intuiting',
                'title' => 'Intuiting',
                'image_path' => 'hero.png',
                'content' => '<h2>Tentang Intuiting</h2><p>Intuiting adalah dimensi STIFIn yang menggambarkan cara seseorang dalam memproses informasi melalui pola, kemungkinan, dan visi masa depan.</p><h3>Karakteristik Intuiting:</h3><ul><li>Berorientasi pada pola dan kemungkinan</li><li>Mengutamakan inovasi dan kreativitas</li><li>Visioner dan inspiratif</li><li>Fokus pada masa depan</li><li>Menggunakan intuisi untuk memahami dunia</li></ul><h3>Kekuatan Intuiting:</h3><p>Orang dengan dominasi Intuiting memiliki kemampuan untuk:</p><ul><li>Melihat pola dan tren</li><li>Mengembangkan ide-ide kreatif</li><li>Membuat visi masa depan</li><li>Berinovasi dan beradaptasi</li><li>Memahami konsep abstrak</li></ul>'
            ],
            [
                'slug' => 'feeling',
                'title' => 'Feeling',
                'image_path' => 'kegiatan.jpg',
                'content' => '<h2>Tentang Feeling</h2><p>Feeling adalah dimensi STIFIn yang menggambarkan cara seseorang dalam memproses informasi melalui nilai-nilai, hubungan, dan empati.</p><h3>Karakteristik Feeling:</h3><ul><li>Berorientasi pada nilai dan hubungan</li><li>Mengutamakan harmoni dan empati</li><li>Kolaboratif dan suportif</li><li>Fokus pada kebutuhan orang lain</li><li>Menggunakan emosi untuk memahami dunia</li></ul><h3>Kekuatan Feeling:</h3><p>Orang dengan dominasi Feeling memiliki kemampuan untuk:</p><ul><li>Memahami perasaan orang lain</li><li>Membangun hubungan yang harmonis</li><li>Memberikan dukungan emosional</li><li>Mengatasi konflik dengan baik</li><li>Menciptakan lingkungan yang positif</li></ul>'
            ],
            [
                'slug' => 'instinct',
                'title' => 'Instinct',
                'image_path' => 'stifin-genetic.png',
                'content' => '<h2>Tentang Instinct</h2><p>Instinct adalah dimensi STIFIn yang menggambarkan cara seseorang dalam memproses informasi melalui naluri, kecepatan, dan respons spontan.</p><h3>Karakteristik Instinct:</h3><ul><li>Berorientasi pada kecepatan dan respons</li><li>Mengutamakan efisiensi dan hasil cepat</li><li>Spontan dan adaptif</li><li>Fokus pada tindakan langsung</li><li>Menggunakan naluri untuk memahami dunia</li></ul><h3>Kekuatan Instinct:</h3><p>Orang dengan dominasi Instinct memiliki kemampuan untuk:</p><ul><li>Merespons dengan cepat</li><li>Mengambil keputusan spontan</li><li>Beradaptasi dengan perubahan</li><li>Menyelesaikan tugas dengan efisien</li><li>Menangani situasi darurat</li></ul>'
            ]
        ];

        foreach ($concepts as $concept) {
            Concept::updateOrCreate(
                ['slug' => $concept['slug']],
                $concept
            );
        }
    }
}
