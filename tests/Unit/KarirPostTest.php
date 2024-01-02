<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\KarirPost;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Admin;

class KarirPostTest extends TestCase
{
    use RefreshDatabase;

/** @test */
public function index_returns_success_status_code()
{
    Admin::create([
        'admin_id' => 1,
        'username' => "admin",
        'email' => "admin@unishare.com",
        'password' => "admin",
        'nama' => "Wzrd"
    ]);
    
    // Hit the index route using the existing route name 'karir.index'
    $response = $this->get(route('karir'));

    // Verifikasi bahwa respons memiliki status kode 200 (OK)
    $response->assertStatus(200);
}



    /** @test */
    public function index_filters_posts_based_on_search_query()
    {
        Admin::create([
            'admin_id' => 1,
            'username' => "admin",
            'email' => "admin@unishare.com",
            'password' => "admin",
            'nama' => "Wzrd"
        ]);
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
        Admin::create([
            'admin_id' => 1,
            'username' => "admin",
            'email' => "admin@unishare.com",
            'password' => "admin",
            'nama' => "Wzrd"
        ]);
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
