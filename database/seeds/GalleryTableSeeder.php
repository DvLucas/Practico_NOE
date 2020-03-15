<?php

use App\Gallery;
use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $galleries=[
            ['id_product' => 1, 'url' => 'images/products/1583241429.jpeg', 'store' => 1],
            ['id_product' => 1, 'url' => 'images/products/1583274255.jpeg', 'store' => 0],
            ['id_product' => 1, 'url' => 'images/products/1583274260.jpeg', 'store' => 0],
            ['id_product' => 1, 'url' => 'images/products/1583274268.jpeg', 'store' => 0],
            ['id_product' => 2, 'url' => 'images/products/1583277704.jpeg', 'store' => 1],
            ['id_product' => 3, 'url' => 'images/products/1583278745.jpeg', 'store' => 1],
            ['id_product' => 4, 'url' => 'images/products/1583278966.jpeg', 'store' => 1],
            ['id_product' => 5, 'url' => 'images/products/1583274426.jpeg', 'store' => 1],
            ['id_product' => 6, 'url' => 'images/products/1584292413.jpeg', 'store' => 1],
            ['id_product' => 7, 'url' => 'images/products/velocidad.jpg', 'store' => 1],
            ['id_product' => 8, 'url' => 'images/products/bluelineornotwomensfront_1200x.jpg', 'store' => 1],
            ['id_product' => 9, 'url' => 'images/products/casco3.jpg', 'store' => 1],
            ['id_product' => 10, 'url' => 'images/products/1584294587.jpeg', 'store' =>1],
            ['id_product' => 11, 'url' => 'images/products/1584294595.jpeg', 'store' => 1],
            ['id_product' => 12, 'url' => 'images/products/1584294601.jpeg', 'store' => 1],
            ['id_product' => 13, 'url' => 'images/products/1584294604.jpeg', 'store' => 1],
            ['id_product' => 14, 'url' => 'images/products/1583274263.jpeg', 'store' => 1],
            ['id_product' => 15, 'url' => 'images/products/1583278966.jpeg', 'store' => 1],
            ['id_product' => 16, 'url' => 'images/products/1584215527.jpeg', 'store' => 1],
            ['id_product' => 17, 'url' => 'images/products/1584292454.jpeg', 'store' => 1],
        ];

        foreach($galleries as $object) {
            App\Gallery::create($object);
        }
    }
}
