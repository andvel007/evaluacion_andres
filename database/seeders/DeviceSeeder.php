<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Device;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Device::create ([
            'nombre'=>'Laptop',
            'marca'=>'HP',
            'modelo'=>'Pavilion',
            'color'=>'negro',
            'serie'=>'LB825D011',
            'mac'=>'50-15-5D',
            'sistemaop'=>'Windows',
            'cargador'=> 1,
            'observacion'=>'Laptop Nueva',
            'user_id'=>1,
        ]);
    }
}
