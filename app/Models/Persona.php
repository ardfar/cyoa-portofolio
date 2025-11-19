<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id', 'name', 'headline', 'description', 'roles', 'theme', 'accent_color'
    ];
    protected $casts = [
        'roles' => 'array',
    ];
}