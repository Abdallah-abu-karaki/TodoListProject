<?php

namespace Database\Factories;

use App\Models\todos;
use Illuminate\Database\Eloquent\Factories\Factory;

class todosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Todos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(3),
            'description'=>$this->faker->text(100),
            'completed'=>false,
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
    }
}
