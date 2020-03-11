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
           ['name'=>'blanco ', 'image'=> ' '],
           ['name'=>'negro ', 'image'=> ' '],
           ['name'=>'rojo ', 'image'=> ' '],
           ['name'=>'azul ', 'image'=> ' '],
           ['name'=>'verde ', 'image'=> ' '],
           ['name'=>'amarillo ', 'image'=> ' '],
           ['name'=>'naranja ', 'image'=> ' ']

       ];

       foreach($colors as $color) {
        App\Color::create($color);
    }
    }
}
