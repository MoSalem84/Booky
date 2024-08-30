<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Author::factory(3)
        ->create();

        \App\Models\User::factory(3)
        ->create();

        \App\Models\Category::factory(2)
        ->create()
        ->each(function ($category) {
        \App\Models\Book::factory(2)
        ->create([
          'category_id' => $category->id,
          'author_id' => \App\Models\Author::all()->random()->id,
          'category_name' => \APP\Models\Category::all()->random()->name]);
        });
    }
}
