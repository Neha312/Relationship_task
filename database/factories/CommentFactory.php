<?php

namespace Database\Factories;

use App\Models\PostUser;
use App\Models\{User, Postbserver};
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'postuser_id' => PostUser::get()->random()->id,
            'post_id' => Postbserver::get()->random()->id,
            'comment_body' => $this->faker->paragraph(2),

        ];
    }
}
