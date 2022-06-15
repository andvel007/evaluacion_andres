<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create ([
            'nombre'=>'Andrés',
            'apellido'=>'Velásquez',
            'cedula'=>'1710901943',
            'email'=>'fausto.velasquez@udla.edu.ec',
            'password'=>bcrypt('HolaMundo1'),
            'provincia'=>'Pichincha',
            'ciudad'=>'Quito',
            'direccion'=>'Miraflores',
            'foto'=>'14445884',
            'telefono'=>'0987579708',
        ]);
        User::create ([
            'nombre'=>'Pepe',
            'apellido'=>'Lopez',
            'cedula'=>'1711911943',
            'email'=>'pepe.lopez@udla.edu.ec',
            'password'=>bcrypt('HolaMundo1'),
            'provincia'=>'Pichincha',
            'ciudad'=>'Quito',
            'direccion'=>'Granados',
            'foto'=>'14445885',
            'telefono'=>'0987680709',
        ]);
        User::create ([
            'nombre'=>'María',
            'apellido'=>'Davila',
            'cedula'=>'1712293903',
            'email'=>'maria.davila@udla.edu.ec',
            'password'=>bcrypt('HolaMundo1'),
            'provincia'=>'Pichincha',
            'ciudad'=>'Quito',
            'direccion'=>'La Occidental',
            'foto'=>'14445864',
            'telefono'=>'0987781710',
        ]);
        User::create ([
            'nombre'=>'David',
            'apellido'=>'Velásquez',
            'cedula'=>'1722777303',
            'email'=>'david.velasquez@udla.edu.ec',
            'password'=>bcrypt('HolaMundo1'),
            'provincia'=>'Pichincha',
            'ciudad'=>'Quito',
            'direccion'=>'6 de Diciembre',
            'foto'=>'14445887',
            'telefono'=>'0987882711',
        ]);
        User::create ([
            'nombre'=>'Katty',
            'apellido'=>'Garzon',
            'cedula'=>'1723787404',
            'email'=>'katty.garzon@udla.edu.ec',
            'password'=>bcrypt('HolaMundo1'),
            'provincia'=>'Pichincha',
            'ciudad'=>'Quito',
            'direccion'=>'República del Salvador',
            'foto'=>'14445888',
            'telefono'=>'0987983712',
        ]);
        User::create ([
            'nombre'=>'Raúl',
            'apellido'=>'Vejar',
            'cedula'=>'1725797505',
            'email'=>'raul.vejar@udla.edu.ec',
            'password'=>bcrypt('HolaMundo1'),
            'provincia'=>'Pichincha',
            'ciudad'=>'Quito',
            'direccion'=>'Av Amazonas',
            'foto'=>'14445889',
            'telefono'=>'0988993813',
        ]);

    }
}
