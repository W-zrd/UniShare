<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use App\Models\Admin;


class StoreNewPostTest extends TestCase
{
    /**
     * Test successful creation of a new post.
     *
     * @return void
     */
    
     public function testStoreNewPostSuccess()
     {
         Storage::fake('public');
 
         // Fetch the existing admin
         $admin = Admin::find(1); // Assuming admin with ID 1 exists
 
         $response = $this->post('/admin/event/add', [
             'title' => 'Test Title',
             'author' => 'Test Author',
             'kategori' => 'Test Category',
             'tema' => 'Test Theme',
             'content' => 'Test Content',
             'url_event' => 'https://flxnzz.my.id',
             'guidebook' => UploadedFile::fake()->create('document.pdf', 1000),
             'banner_img' => UploadedFile::fake()->image('banner.jpg'),
         ]);
 
         $response->assertRedirect('admin');
         $this->assertCount(1, Post::all());
     }
 
     /**
      * Test post creation with invalid data.
      *
      * @return void
      */
     public function testStoreNewPostFailureWithInvalidData()
     {
 
         $response = $this->post('/admin/event/add', [
             // Send invalid or incomplete data here
             'title' => '', // Invalid data
             // other fields can be left out to test validation
         ]);
 
         $response->assertSessionHasErrors(); // Assert session has errors for validation
         $this->assertCount(1, Post::all());
     }

    /**
     * Test file upload handling when no files are uploaded.
     *
     * @return void
     */
    public function testStoreNewPostWithoutFiles()
    {
        Storage::fake('public');

        $response = $this->post('/admin/event/add', [
            'title' => 'Test Title',
            'author' => 'Test Author',
            'kategori' => 'Test Category',
            'tema' => 'Test Theme',
            'content' => 'Test Content',
            'url_event' => 'https://flxnzz.my.id',
            // Do not include files
        ]);

        $response->assertRedirect('admin');
        $this->assertCount(2, Post::all());
        // Optionally assert that no files were stored
    }

    /**
     * Test post creation with large file (exceeding the limit).
     *
     * @return void
     */
    public function testStoreNewPostWithLargeFile()
    {
        Storage::fake('public');

        $response = $this->post('/admin/event/add', [
            'title' => 'Test Title',
            'author' => 'Test Author',
            'kategori' => 'Test Category',
            'tema' => 'Test Theme',
            'content' => 'Test Content',
            'url_event' => 'https://flxnzz.my.id',
            'guidebook' => UploadedFile::fake()->create('large_document.pdf', 6000), // 6MB file
            'banner_img' => UploadedFile::fake()->image('banner.jpg'),
        ]);
        $this->assertCount(3, Post::all());
    }

}

