<?php

use App\Colors_products;
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
            'id_brand' => 2, 'state' => 1],
            ['name' => 'Pure Fix Nightlights', 'description' => 'Never ride without lights! Add some extra visibility and a splash of color to your ride with these handy little nightlights.', 'price' => 3400, 'stock' => 15, 'id_category' => 12,
            'id_brand' => 9, 'state' => 1],
            ['name' => 'Premium Pedals with Leather Straps', 'description' => 'Our caged pedals are heavy-duty and designed to fit all of our bikes.  These pedals allow you to apply force in a downward and upward motion, enhancing overall output and efficiency. ', 'price' => 5600, 'stock' => 15, 'id_category' => 13,
            'id_brand' => 6, 'state' => 1],
            ['name' => 'City Classic Saddle', 'description' => 'The soft ride of a sprung saddle in a sportier package than the step-throughs', 'price' => 7200, 'stock' => 15, 'id_category' => 14,
            'id_brand' => 8, 'state' => 1],
            ['name' => 'Original Fixed Gear Frameset', 'description' => 'Our Original Fixed-Gear Frameset is a track inspired frame designed to throw down speed on the streets. ', 'price' => 17400, 'stock' => 15, 'id_category' => 15,
            'id_brand' => 7, 'state' => 1],
            ['name' => 'Velo Orange Grand Cru: Front and Rear Brakeset', 'description' => 'The Grand Cru Long Reach caliper brakes are super stiff with a smooth, dual-pivot design to offer superb modulation and power.', 'price' => 8400, 'stock' => 15, 'id_category' => 16,
            'id_brand' => 5, 'state' => 1],
            ['name' => 'WTB Horizon 650b', 'description' => 'One word will comes to mind when you see the WTB Horizon 650b x 47 tires and its supple. This plus size tire delivers ample traction and a buttery smooth ride even after the pavement ends.', 'price' => 4700, 'stock' => 15, 'id_category' => 17,
            'id_brand' => 7, 'state' => 1],
            ['name' => 'Race Team Tee', 'description' => 'This vintage take on our Race Jersey livery keeps you looking pro at your favorite coffee shop or bar, without the funny looks you’d get in Lycra.  ', 'price' => 1500, 'stock' => 15, 'id_category' => 18,
            'id_brand' => 8, 'state' => 1],
            ['name' => 'Byway Tires', 'description' => 'The most dirt-focused in WTBs Road Plus lineup has caught our eye! The Byway Road Plus tire delivers a supple feel and plus sized traction.', 'price' => 8500, 'stock' => 15, 'id_category' => 19,
            'id_brand' => 9, 'state' => 1],
            ['name' => 'FSA 650B Gravel Wheelset', 'description' => 'TWhether youre looking for that ultra cushy ride across hundreds of miles of bikepacking, FSAs 650b Gravel wheelset with its proven alloy construction and added tire clearance will get you to where you need to go.', 'price' => 14500, 'stock' => 15, 'id_category' => 20,
            'id_brand' => 10, 'state' => 1]                
        ];

        foreach($products as $product) {
            App\Products::create($product);
        }

    }
}
