<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TechProject extends Model
{
    protected $table = 'tech_projects';
    protected $fillable = [
        'title', 'description', 'technologies', 'link', 'image'
    ];
    protected $casts = [
        'technologies' => 'array',
    ];
}