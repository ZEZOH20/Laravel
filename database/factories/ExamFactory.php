<?php

namespace Database\Factories;

use App\Models\Exam;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Exam::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   $examEndTime=time()+(2*60*60);
        static $i=0;
        $i++;
        return [
            'name'=>json_encode([
                'en'=>$this->faker->word(),
                'ar'=>$this->faker->word(),
            ]),
            'image'=>"/exam/$i.jpg",
            'desc'=>json_encode([
                'en'=>$this->faker->text(30),
                'ar'=>$this->faker->text(30),
            ]),
            'difficulty'=>$this->faker->numberBetween(1,5),
            'Question_no'=>$this->faker->numberBetween(1,10),
            'duration_min'=>$examEndTime-time(),
        ];
    }
}
//date("h:m",$examEndTime-time())
