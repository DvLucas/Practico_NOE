<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $colors =[
           ['name'=>'blanco ', 'image'=> '#ffffff'],
           ['name'=>'negro ', 'image'=> '#000000'],
           ['name'=>'rojo ', 'image'=> '#ff0000'],
           ['name'=>'azul ', 'image'=> '#0d00ff'],
           ['name'=>'verde ', 'image'=> '#00ff1a'],
           ['name'=>'amarillo ', 'image'=> '#fff700'],
           ['name'=>'naranja ', 'image'=> '#ff8000']

       ];

       foreach($colors as $color) {
        App\Color::create($color);
    }
    }
}
