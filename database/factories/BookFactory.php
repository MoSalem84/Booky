<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>$this->faker->sentence ,
            'author_name'=>fake()->name(),
            'category_name'=>fake()->name(),
            'description'=>fake()->paragraph(10) ,
            'price'=>rand(1,100) ,
            'quantity'=>rand(1,100) ,
            'image'=>'book_default.png',
        ];
    }
}
