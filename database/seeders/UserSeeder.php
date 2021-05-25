<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Cliente;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Andy',
            'email' => 'antrick10@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Administrador');
        User::create([
            'name' => 'carlos',
            'email' => 'carlos10@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Administrador');
        User::create([
            'name' => 'roberto',
            'email' => 'roberto10@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Administrador');
        User::create([
            'name' => 'camila',
            'email' => 'camila10@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Administrador');
        User::create([
            'name' => 'ruben',
            'email' => 'ruben10@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Administrador');
        User::create([
            'name' => 'sofia',
            'email' => 'sofia10@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Administrador');
        User::create([
            'name' => 'maria',
            'email' => 'maria10@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Administrador');
        User::create([
            'name' => 'pedro',
            'email' => 'pedro10@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Administrador');
        User::create([
            'name' => 'antonio',
            'email' => 'antonio10@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Administrador');
        User::create([
            'name' => 'lupe',
            'email' => 'lupe10@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Administrador');
        User::create([
            'name' => 'david',
            'email' => 'david10@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Administrador');
        User::create([
            'name' => 'online',
            'email' => 'online10@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Administrador');
        User::create([
            'name' => 'marcelo',
            'email' => 'marcelo10@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Administrador');
        User::create([
            'name' => 'noe',
            'email' => 'noe10@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Administrador');
        User::create([
            'name' => 'erika',
            'email' => 'erika10@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Administrador');
        User::create([
            'name' => 'miriam',
            'email' => 'miriam10@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Administrador');
        User::create([
            'name' => 'julio',
            'email' => 'julio10@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Administrador');

        $cliente = new Cliente();
        $cliente->name = "rojas";
        $cliente->email = "rojas@gmail.com";
        $cliente->password = Crypt::encrypt('123456');
        $cliente->remember_token = Str::random(100);
        $cliente->anio_inicio = "2020";
        $cliente->anio_fin = "2022";
        $cliente->logo = "n12.s..12d.12ed1d";
        $cliente->municipio_id = 1;
        $cliente->save();

        $cliente2 = new Cliente();
        $cliente2->name = "tlachi";
        $cliente2->email = "tlachi@gmail.com";
        $cliente2->password = Crypt::encrypt('123456');
        $cliente2->remember_token = Str::random(100);
        $cliente2->anio_inicio = "2021";
        $cliente2->anio_fin = "2023";
        $cliente2->logo = "n1a/nsd/jnna/d1d";
        $cliente2->municipio_id = 2;
        $cliente2->save();

        $cliente3 = new Cliente();
        $cliente3->name = "rosario";
        $cliente3->email = "rosario@gmail.com";
        $cliente3->password = Crypt::encrypt('123456');
        $cliente3->remember_token = Str::random(100);
        $cliente3->anio_inicio = "2019";
        $cliente3->anio_fin = "2021";
        $cliente3->logo = "oooo/ppsd/joo/drrd";
        $cliente3->municipio_id = 3;
        $cliente3->save();
    }
}
