<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User();
        $usuario->name = "Admin";
        $usuario->email = "admin@mail.com";
        $usuario->password = Hash::make("123456");
        $usuario->save();

        $usuario = new User();
        $usuario->name = "Alan Cristian";
        $usuario->email = "alancristian2000@live.com";
        $usuario->password = Hash::make("126709alan");
        $usuario->save();
    }
}
