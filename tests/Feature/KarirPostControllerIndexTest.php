<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\KarirPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KarirPostControllerIndexTest extends TestCase
{
    public function testIndexMethodWithSearch()
    {
        // Membuat data dummy KarirPost untuk diuji
        KarirPost::factory()->create(['title' => 'Example Post 1']);
        KarirPost::factory()->create(['title' => 'Example Post 2']);
        KarirPost::factory()->create(['title' => 'Another Post']);

        // Menjalankan fungsi index dengan parameter request yang memiliki 'search'
        $response = $this->get('/karir', ['search' => 'Example']);

        // Memastikan respons memiliki status 200 OK
        $response->assertStatus(200);

        // Memastikan bahwa data yang sesuai dengan filter 'search' ditampilkan di view
        $response->assertSee('Example Post 1');
        $response->assertSee('Example Post 2');

        // Memastikan bahwa data yang tidak sesuai dengan filter 'search' tidak ditampilkan di view
        $response->assertDontSee('Another Post');
    }

    public function testIndexMethodWithThemeFilter()
    {
        // Membuat data dummy KarirPost dengan tema tertentu
        $karirWithTheme = factory(KarirPost::class, 3)->create(['tema' => 'theme1']);
        factory(KarirPost::class, 2)->create(['tema' => 'theme2']);

        // Menjalankan fungsi index dengan parameter request yang memiliki 'theme'
        $response = $this->get('/karir', ['theme' => ['theme1']]);

        // Memastikan respons memiliki status 200 OK
        $response->assertStatus(200);

        // Memastikan hanya data dengan tema yang sesuai ditampilkan di view
        foreach ($karirWithTheme as $karir) {
            $response->assertSee($karir->judul); // Gantilah judul dengan atribut yang sesuai
        }
    }

    public function testIndexMethodWithCategoryFilter()
    {
        // Membuat data dummy KarirPost dengan kategori tertentu
        $karirWithCategory = factory(KarirPost::class, 3)->create(['kategori' => 'category1']);
        factory(KarirPost::class, 2)->create(['kategori' => 'category2']);

        // Menjalankan fungsi index dengan parameter request yang memiliki 'category'
        $response = $this->get('/karir', ['category' => 'category1']);

        // Memastikan respons memiliki status 200 OK
        $response->assertStatus(200);

        // Memastikan hanya data dengan kategori yang sesuai ditampilkan di view
        foreach ($karirWithCategory as $karir) {
            $response->assertSee($karir->judul); // Gantilah judul dengan atribut yang sesuai
        }
    }
}
