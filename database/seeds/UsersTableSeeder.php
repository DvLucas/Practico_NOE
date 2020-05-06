<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'admin', 'surname' => 'admin','password' => Hash::make('admin'), 'email' => 'admin@noe.com', 'id_rol' => '1']
        ];

        foreach($users as $user) {
            App\User::create($user);
        }
    }
}
