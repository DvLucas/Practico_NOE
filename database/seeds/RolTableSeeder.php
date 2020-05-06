<?php

use App\Rol;
use Illuminate\Database\Seeder;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Roles = [
            ['description' => 'Admin'],
            ['description' => 'Normal User']
        ];

        foreach($Roles as $rol) {
            App\Rol::create($rol);
        }
    }
    
}
