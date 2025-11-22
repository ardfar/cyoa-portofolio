<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = [
        'title', 'category', 'skills', 'description'
    ];
    protected $casts = [
        'skills' => 'array',
    ];
}