<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         $rolles=['user','admin','superAdmin'];

         foreach ($rolles as $value){
            Role::create([
                'name'=>$value
             ]);
         }



    }
}
