<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'question_title'=>json_encode([
                'en'=>$this->faker->text(40),
                'ar'=>$this->faker->text(40),
            ]),
            'option_1'=>json_encode([
                'en'=>$this->faker->text(70),
                'ar'=>$this->faker->text(70),
            ]),
            'option_2'=>json_encode([
                'en'=>$this->faker->text(70),
                'ar'=>$this->faker->text(70),
            ]),
            'option_3'=>json_encode([
                'en'=>$this->faker->text(70),
                'ar'=>$this->faker->text(70),
            ]),
            'option_4'=>json_encode([
                'en'=>$this->faker->text(70),
                'ar'=>$this->faker->text(70),
            ]),
            'right_ans'=>$this->faker->numberBetween(1,4),

        ];
    }
}
