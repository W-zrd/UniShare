<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $primaryKey = 'admin_id';
    protected $table='admin';
    protected $fillable = [
        'admin_id',
        'username',
        'email',
        'password',
        'nama',
        'prof_pic'
    ];

    

}
