<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Certification extends Model
{
    use HasFactory;

    protected $fillable = [
        'skill_id',
        'name',
        'issuer',
        'issue_date',
        'badge_image',
    ];

    protected $casts = [
        'issue_date' => 'date',
    ];

    public function skill(): BelongsTo
    {
        return $this->belongsTo(Skill::class);
    }
}
