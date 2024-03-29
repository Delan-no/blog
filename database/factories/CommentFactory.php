<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition(): array
    {
        return [
            'comment' => $this->faker->text(50),
            'user_id' => function () {
                return User::inRandomOrder()->first()->id;
            },
            'article_id' => function () {
                return Article::inRandomOrder()->first()->id;
            },
        ];
    }
}
