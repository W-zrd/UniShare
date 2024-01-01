<?php

namespace Database\Factories;

use App\Models\KarirPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class KarirPostFactory extends Factory
{
    protected $model = KarirPost::class;

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
            'admin_id' => \App\Models\Admin::factory()->create()->id, // Jika 'admin_id' adalah foreign key, pastikan AdminFactory ada dan mengembalikan id admin yang valid
        ];
    }
}
