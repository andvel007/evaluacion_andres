<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'users',
            'devices'
        ]);
        $this->call(UserSeeder::class);
        $this->call(DeviceSeeder::class);
               
    }
    protected function truncateTables(array $tables){
        DB::statement ('SET FOREIGN_KEY_CHECKS=0');
        foreach($tables as $table){
            DB::table($table)->truncate();
        }
        
        DB::statement ('SET FOREIGN_KEY_CHECKS=1'); 
    }
}
