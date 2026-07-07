<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'persona_tags',
    ];

    protected $casts = [
        'persona_tags' => 'array',
    ];

    public function certifications(): HasMany
    {
        return $this->hasMany(Certification::class);
    }
}
