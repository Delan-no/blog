<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 */
class ArticleFactory extends Factory
{
    protected $model = Article::class;
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(15),
            'body' => $this->faker->text(300),
            'user_id' => function () {
                return User::inRandomOrder()->first()->id;
            },
            'image' => $this->faker->image(public_path('images')),
        ];
    }
}
