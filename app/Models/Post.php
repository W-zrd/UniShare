<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $primaryKey = 'post_id';

    protected $fillable = [
        'title',
        'author',
        'kategori',
        'tema',
        'content',
        'url_event',
        'guidebook',
        'banner_img',
        'admin_id',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}
