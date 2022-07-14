<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)), 
            'category_id' => mt_rand(1,3), 
            'user_id' => mt_rand(1,3),
            'slug' => $this->faker->slug(), 
            'excerpt' => $this->faker->paragraph(mt_rand(11,12)), 
            'body' => $this->faker->paragraph(mt_rand(100,200))
        ];
    }
}
