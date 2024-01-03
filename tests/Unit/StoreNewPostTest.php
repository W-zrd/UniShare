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
 
         Admin::create([
            'username' => 'your_username',
            'email' => 'your_email@example.com',
            'password' => bcrypt('your_password'), 
            'nama' => 'Admin Name',
        ]);
        
         $admin = Admin::find(1); 
 
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
     public function testStoreNewPostFailureWithBlankField()
     {
 
         $response = $this->post('/admin/event/add', [
            // field title tidak diisi
            'author' => 'Test Author',
            'kategori' => 'Test Category',
            'tema' => 'Test Theme',
            'content' => 'Test Content',
            'url_event' => 'https://flxnzz.my.id', 
         ]);
 
         $response->assertSessionHasErrors(); 
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
        ]);

        $response->assertRedirect('admin');
        $this->assertCount(2, Post::all());
    }

}

