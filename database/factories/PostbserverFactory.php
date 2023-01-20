<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\PostUser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Postbserver>
 */
class PostbserverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->paragraph(1),
            'body' => $this->faker->paragraph(1),
            'postuser_id' => PostUser::get()->random()->id

        ];
    }
}
