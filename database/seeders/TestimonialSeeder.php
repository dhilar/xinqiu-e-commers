<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            'name' => 'Tom S.',
            'message' => 'Setelah menggunakan sepeda motor listrik dari PT Xinqiu selama beberapa bulan, saya merasa sangat puas. Kendaraan ini sangat nyaman dan memiliki desain yang modern. Proses pengisian daya yang cepat juga menjadi nilai tambah. Dukungan pelanggan yang responsif membuat saya semakin yakin telah membuat pilihan yang tepat. Terima kasih PT Xinqiu!',
            'image' => 'asset/images/paint-small.jpg'
        ]);

        Testimonial::create([
            'name' => 'Liz S.',
            'message' => 'Saya sangat senang dengan mobil listrik yang saya beli dari PT Xinqiu. Performa mobil ini luar biasa, dan saya tidak perlu khawatir tentang biaya bahan bakar yang mahal. Selain itu, saya merasa bangga bisa berkontribusi dalam mengurangi polusi udara. Layanan purna jual mereka juga sangat memuaskan, dengan teknisi yang selalu siap membantu.',
            'image' => 'asset/images/paint-small.jpg'
        ]);

        Testimonial::create([
            'name' => 'Mike A.',
            'message' => 'Pengalaman saya membeli skuter listrik dari PT Xinqiu sangat memuaskan. Proses pembelian yang mudah dan staf yang ramah membuat saya merasa nyaman. Skuter listrik yang saya beli sangat efisien dan ramah lingkungan, cocok untuk perjalanan sehari-hari saya di kota. Saya sangat merekomendasikan PT Xinqiu kepada siapa saja yang ingin beralih ke kendaraan listrik.',
            'image' => 'asset/images/paint-small.jpg'
        ]);
    }
}
