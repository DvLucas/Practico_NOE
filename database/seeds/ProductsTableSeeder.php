<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['name' => 'Gravel Adventure Bike', 'description' => '650B compatible, so you can swap rims and rock monster tires. Gravel-ready geometry keeps you in control on loose surfaces.', 'price' => 23000, 'stock' => 15, 'id_category' => 5,
            'id_brand' => 1, 'state' => 1], 
            ['name' => 'Abbot / Medium', 'description' => '650B compatible, so you can swap rims and rock monster tires. Gravel-ready geometry keeps you in control on loose surfaces. r', 'price' => 23000, 'stock' => 15, 'id_category' => 5,
            'id_brand' => 2, 'state' => 1],
            ['name' => 'XS / Ashcroft / 22 Speed', 'description' => 'Tange Champion 2 Tubing for a light, comfortable ride. 3T Cockpit. Shimano 105 Groupse. Hutchinson Fusion tires for a race-ready ride.', 'price' => 23000, 'stock' => 15, 'id_category' => 6,
            'id_brand' => 5, 'state' => 1],
            ['name' => 'Pure City Classic Bike - 8 Speed', 'description' => '8-speed external gearing or check out the 3-speed internal gearing option. Relaxed urban geometry. Includes rear rack and fenders', 'price' => 23000, 'stock' => 15, 'id_category' => 7,
            'id_brand' => 4, 'state' => 1],
            ['name' => 'Classic Beach Cruiser', 'description' => 'Coaster (kick-back) brake keeps stopping simple and hands-free. Sure Foot Technology for stable starts and stops.', 'price' => 23000, 'stock' => 15, 'id_category' => 8,
            'id_brand' => 2, 'state' => 1],
            ['name' => 'Topeak Bike Cover for 26 " MTB Bikes White/Black', 'description' => 'Quickly folds to a compact size. Made with durable 190T Nylon.', 'price' => 23000, 'stock' => 15, 'id_category' => 9,
            'id_brand' => 5, 'state' => 1],
            ['name' => 'SKS Edge AL 45 Aluminum Fender Set Black 700 x 25-35', 'description' => 'SKS Edge AL Aluminum Fender Set.', 'price' => 23000, 'stock' => 15, 'id_category' => 10,
            'id_brand' => 3, 'state' => 1],
            ['name' => 'Topeak Cagepack XL, Black/Yellow', 'description' => 'Includes detachable organizer. Protects and organizes pumps less than 22cm long, C02 inflators, tools and tubes', 'price' => 23000, 'stock' => 15, 'id_category' => 11,
            'id_brand' => 2, 'state' => 1]           
        ];

        foreach($products as $product) {
            App\Products::create($product);
        }
    }
}
