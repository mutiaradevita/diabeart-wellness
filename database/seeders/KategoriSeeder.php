<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[[
            'nama_kategori'=> 'Makanan',
            'gambar' => null,
        ],
        [
            'nama_kategori'=> 'Minuman',
            'gambar' => null,
        ]];

        DB::table('kategori')->insert($data);
    }
}
