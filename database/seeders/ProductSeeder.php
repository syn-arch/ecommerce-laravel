<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            Product::create([
                'id_kategori' => rand(1, 3),
                'id_subkategori' => rand(1, 4),
                'nama_barang' => 'Lorem Ipsum Dolor Sit Amet',
                'harga' => rand(1000, 100000),
                'diskon' => 0,
                'bahan' => 'Lorem Ipsum Dolor',
                'tags' => 'Lorem,Ipsum,Dolor,Sit,Amet',
                'sku' => Str::random(8),
                'ukuran' => 'S,M,L,XL',
                'warna' => 'Hitam,Biru,Kuning,Putih,Hijau',
                'gambar' => 'shop_image_' . $i . '.jpg',
                'deskripsi' => 'Lorem Ipsum Dolor Sit Amet'
            ]);
        }
    }
}
