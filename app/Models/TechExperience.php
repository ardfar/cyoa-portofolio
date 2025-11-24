<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TechExperience extends Model
{
    protected $table = 'tech_experiences';

    protected $fillable = [
        'title', 'org',
    ];
}
