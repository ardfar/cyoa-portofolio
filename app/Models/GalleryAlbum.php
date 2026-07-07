<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GalleryAlbum extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'cover_photo_id',
    ];

    public function photos(): HasMany
    {
        return $this->hasMany(GalleryPhoto::class, 'album_id');
    }
}
