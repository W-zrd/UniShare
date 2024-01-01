<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use App\Models\KarirPost;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KarirPost>
 */
class KarirPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = KarirPost::class; // Specify the model class

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'author' => $this->faker->name,
            'kategori' => $this->faker->word,
            'tema' => $this->faker->word,
            'content' => $this->faker->paragraph,
            'url_event' => $this->faker->url,
            'guidebook' => $this->faker->url,
            'banner_img' => $this->faker->imageUrl,
            'admin_id' => 1,
        ];
    }
}
