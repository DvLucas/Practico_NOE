<?php

use App\Colors_products;
use Illuminate\Database\Seeder;

class Colors_productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ColorProducts = [
            ['id_product'=> 1,'id_color' => rand(1,7)],
            ['id_product'=> 1,'id_color' => rand(1,7)],
            ['id_product'=> 2,'id_color' => rand(1,7)],
            ['id_product'=> 2,'id_color' => rand(1,7)],
            ['id_product'=> 3,'id_color' => rand(1,7)],
            ['id_product'=> 3,'id_color' => rand(1,7)],
            ['id_product'=> 4,'id_color' => rand(1,7)],
            ['id_product'=> 5,'id_color' => rand(1,7)],
            ['id_product'=> 5,'id_color' => rand(1,7)],
            ['id_product'=> 5,'id_color' => rand(1,7)],
            ['id_product'=> 6,'id_color' => rand(1,7)],
            ['id_product'=> 6,'id_color' => rand(1,7)],
            ['id_product'=> 7,'id_color' => rand(1,7)],
            ['id_product'=> 7,'id_color' => rand(1,7)],
            ['id_product'=> 8,'id_color' => rand(1,7)],
            ['id_product'=> 8,'id_color' => rand(1,7)],
            ['id_product'=> 9,'id_color' => rand(1,7)],
            ['id_product'=> 10,'id_color' => rand(1,7)],
            ['id_product'=> 11,'id_color' => rand(1,7)],
            ['id_product'=> 12,'id_color' => rand(1,7)],
            ['id_product'=> 12,'id_color' => rand(1,7)],
            ['id_product'=> 13,'id_color' => rand(1,7)],
        ];

        foreach($ColorProducts as $object) {
            App\Colors_products::create($object);
        }
    }
}
