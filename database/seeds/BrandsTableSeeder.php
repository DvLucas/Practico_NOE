<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('brands')->delete(); */

        $brands = [
            ['description' => 'Specialized'],
            ['description' => 'Scott'],
            ['description' => 'Trek'],
            ['description' => 'Giant'],
            ['description' => 'Canyon'],
            ['description' => 'Cannondale'],
            ['description' => 'Orbea'],
            ['description' => 'BMC'],
            ['description' => 'Pinarello'],
            ['description' => 'Bianchi']
        ];

        foreach($brands as $brand) {
            App\Brands::create($brand);
        }
    }
}
