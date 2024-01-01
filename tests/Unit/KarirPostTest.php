<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\KarirPost;
use Illuminate\Foundation\Testing\RefreshDatabase;

class KarirPostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function index_returns_view_with_posts()
    {
        // Buat beberapa posts sebagai sample data
        KarirPost::factory()->count(5)->create();

        // Hit the index route
        $response = $this->get(route('karir.index'));

        // Verifikasi bahwa view yang dikembalikan adalah 'karir'
        $response->assertViewIs('karir');

        // Verifikasi bahwa data yang dikirim ke view adalah sebuah collection dari KarirPost
        $response->assertViewHas('data', function ($viewData) {
            return $viewData instanceof \Illuminate\Pagination\LengthAwarePaginator &&
                   $viewData->first() instanceof KarirPost;
        });
    }

    /** @test */
    public function index_filters_posts_based_on_search_query()
    {
        // Buat posts dengan judul spesifik
        KarirPost::factory()->create(['title' => 'Post Spesial']);
        KarirPost::factory()->count(4)->create();

        // Hit the index route dengan query pencarian
        $response = $this->get(route('karir.index', ['search' => 'Spesial']));

        // Verifikasi bahwa hanya satu post yang dikembalikan dan judulnya cocok
        $response->assertViewHas('data', function ($viewData) {
            return $viewData->count() == 1 && $viewData->first()->title == 'Post Spesial';
        });
    }

    /** @test */
    public function index_returns_paginated_data()
    {
        // Buat jumlah posts yang lebih banyak dari batas pagination
        KarirPost::factory()->count(10)->create();

        // Hit the index route
        $response = $this->get(route('karir.index'));

        // Verifikasi bahwa data yang dikembalikan adalah paginated
        $response->assertViewHas('data', function ($viewData) {
            return $viewData instanceof \Illuminate\Pagination\LengthAwarePaginator;
        });
    }
}
