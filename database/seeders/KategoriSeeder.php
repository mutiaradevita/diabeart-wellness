<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[[
            'id'=>'7',
            'nama_kategori'=> 'Makanan',
        ],
        [
            'id'=>'8',
            'nama_kategori'=> 'Minuman',
        ]];
    }
}
