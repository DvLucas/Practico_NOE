<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name_category' =>'Bicicleta','description'=>'category father' ],
            ['name_category' =>'Accesorios','description'=>'category father' ],
            ['name_category' =>'Partes','description'=>'category father' ],
            ['name_category' =>'Cubiertas','description'=>'category father' ],
            ['name_category' =>'Adventure','description'=>'','id_father_category'=>'1' ],
            ['name_category' =>'Road','description'=>'', 'id_father_category'=>'1' ],
            ['name_category' =>'City','description'=>'','id_father_category'=>'1' ],
            ['name_category' =>'Cruisers','description'=>'','id_father_category'=>'1' ],
            ['name_category' =>'Protector Bicicletas','description'=>'','id_father_category'=>'2' ],
            ['name_category' =>'Guardabarros','description'=>'','id_father_category'=>'2' ],
            ['name_category' =>'Botellas','description'=>'','id_father_category'=>'2' ],
            ['name_category' =>'Luces','description'=>'','id_father_category'=>'2' ],
            ['name_category' =>'Pedales','description'=>'','id_father_category'=>'3' ],
            ['name_category' =>'Asientos','description'=>'','id_father_category'=>'3' ],
            ['name_category' =>'Cuadros','description'=>'','id_father_category'=>'3' ],
            ['name_category' =>'Frenos','description'=>'','id_father_category'=>'3' ],
            ['name_category' =>'Ruta','description'=>'','id_father_category'=>'4' ],
            ['name_category' =>'Playeras','description'=>'','id_father_category'=>'4' ],
            ['name_category' =>'Paseo','description'=>'','id_father_category'=>'4' ],
            ['name_category' =>'Mountain Bike','description'=>'','id_father_category'=>'4' ],
        ];

        foreach($categories as $category) {
            App\Categories::create($category);
        }
    }
}
