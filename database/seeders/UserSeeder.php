<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $User=[['Ahmed','Ahmed@gmail.com','18739','2'],
        ['Mohamed','Mohamed@gmail.com','18739','1'],
        ['Waled','Waled@gmail.com','18739','3']];

        foreach ($User as $obj){
                    User::create([
                        'name'=>$obj[0],
                        'email'=>$obj[1],
                        'password'=>Hash::make($obj[2]),
                        'role_id'=>$obj[3]
                    ]);
            }
        }
    }

