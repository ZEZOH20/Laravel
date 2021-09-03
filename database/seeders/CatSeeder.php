<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cat;
use App\Models\Skill;
use App\Models\Exam;
use App\Models\Question;
class CatSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cat::factory()->has(
           Skill::factory()->has(
               Exam::factory()->has(
                   Question::factory()->count(5)
               )->count(5)
           )->count(5)
        )->count(5)->create();
    }
}
