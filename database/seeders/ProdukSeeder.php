<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produk = [
            [
                'nama' => 'Smoothie Alpukat',
                'gambar' => null,
                'deskripsi' => 'Smoothie Alpukat adalah minuman sehat yang terbuat dari alpukat segar, susu almond, dan madu alami. Kaya akan serat, vitamin, dan mineral.',
                'harga' => 20000,
                'komposisi' => 'Alpukat, susu almond, madu',
                'karbo' => 25,
                'protein' => 5,
                'kalori' => 150,
                'serat' => 8,
                'hidden' => 'yes',
            ],
            [
                'nama' => 'Salad Sayuran Segar',
                'gambar' => null,
                'deskripsi' => 'Salad Sayuran Segar adalah campuran sayuran hijau segar seperti bayam, selada, tomat ceri, dan mentimun. Dapat disajikan dengan dressing sehat pilihan.',
                'harga' => 25000,
                'komposisi' => 'Bayam, selada, tomat ceri, mentimun',
                'karbo' => 15,
                'protein' => 3,
                'kalori' => 80,
                'serat' => 5,
                'hidden' => 'yes',
            ],
            [
                'nama' => 'Nasi Merah Organik',
                'gambar' => null,
                'deskripsi' => 'Nasi Merah Organik adalah nasi merah murni dari pertanian organik, kaya akan serat dan nutrisi. Cocok untuk diet sehat dan gaya hidup organik.',
                'harga' => 30000,
                'komposisi' => 'Nasi merah organik',
                'karbo' => 30,
                'protein' => 4,
                'kalori' => 120,
                'serat' => 6,
                'hidden' => 'yes',
            ],
            [
                'nama' => 'Sushi Salad',
                'gambar' => null,
                'deskripsi' => 'Sushi Salad adalah hidangan sehat yang terinspirasi dari sushi Jepang. Terdiri dari potongan ikan segar, sayuran, dan nasi atau quinoa.',
                'harga' => 35000,
                'komposisi' => 'Ikan segar, sayuran, nasi/quinoa',
                'karbo' => 20,
                'protein' => 10,
                'kalori' => 180,
                'serat' => 3,
                'hidden' => 'yes',
            ],
            [
                'nama' => 'Smoothie Bowl Mangga',
                'gambar' => null,
                'deskripsi' => 'Smoothie Bowl Mangga adalah sajian lezat berupa mangga segar yang diblender bersama dengan yogurt, madu, dan topping buah-buahan dan biji-bijian.',
                'harga' => 40000,
                'komposisi' => 'Mangga, yogurt, madu, topping buah-buahan dan biji-bijian',
                'karbo' => 35,
                'protein' => 8,
                'kalori' => 220,
                'serat' => 7,
                'hidden' => 'yes',
            ],
            [
                'nama' => 'Sup Brokoli',
                'gambar' => null,
                'deskripsi' => 'Sup Brokoli adalah hidangan hangat yang terbuat dari brokoli segar, kaldu sayuran, dan rempah-rempah. Kaya akan serat, vitamin, dan antioksidan.',
                'harga' => 25000,
                'komposisi' => 'Brokoli, kaldu sayuran, rempah-rempah',
                'karbo' => 18,
                'protein' => 5,
                'kalori' => 120,
                'serat' => 6,
                'hidden' => 'yes',
            ],
            [
                'nama' => 'Smoothie Berry',
                'gambar' => null,
                'deskripsi' => 'Smoothie Berry adalah minuman segar yang terbuat dari campuran beri-berian seperti blueberry, raspberry, dan strawberry. Tinggi antioksidan dan rendah kalori.',
                'harga' => 30000,
                'komposisi' => 'Blueberry, raspberry, strawberry',
                'karbo' => 22,
                'protein' => 4,
                'kalori' => 140,
                'serat' => 5,
                'hidden' => 'yes',
            ],
            [
                'nama' => 'Salad Quinoa',
                'gambar' => null,
                'deskripsi' => 'Salad Quinoa adalah hidangan sehat yang terdiri dari quinoa, sayuran segar, dan dressing bervariasi. Kaya protein, serat, dan nutrisi.',
                'harga' => 35000,
                'komposisi' => 'Quinoa, sayuran, dressing',
                'karbo' => 25,
                'protein' => 7,
                'kalori' => 180,
                'serat' => 6,
                'hidden' => 'yes',
            ],
            [
                'nama' => 'Smoothie Popeye',
                'gambar' => null,
                'deskripsi' => 'Smoothie Popeye adalah minuman sehat yang terbuat dari bayam segar, pisang, almond milk, dan bubuk spirulina. Tinggi nutrisi dan energi.',
                'harga' => 25000,
                'komposisi' => 'Bayam, pisang, almond milk, bubuk spirulina',
                'karbo' => 30,
                'protein' => 6,
                'kalori' => 160,
                'serat' => 4,
                'hidden' => 'yes',
            ],
            [
                'nama' => 'Bowl Buah Segar',
                'gambar' => null,
                'deskripsi' => 'Bowl Buah Segar adalah sajian berisi campuran berbagai buah segar seperti jeruk, apel, melon, dan anggur. Kaya akan serat, vitamin, dan antioksidan.',
                'harga' => 30000,
                'komposisi' => 'Jeruk, apel, melon, anggur',
                'karbo' => 28,
                'protein' => 3,
                'kalori' => 120,
                'serat' => 8,
                'hidden' => 'yes',
            ],
        ];

        DB::table('produk')->insert($produk);
    }
}
