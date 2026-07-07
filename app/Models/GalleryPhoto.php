<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GalleryPhoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'album_id',
        'file_path',
        'original_filename',
        'exif_data',
        'caption',
        'alt_text',
        'sort_order',
    ];

    protected $casts = [
        'exif_data' => 'array',
    ];

    public function album(): BelongsTo
    {
        return $this->belongsTo(GalleryAlbum::class, 'album_id');
    }
}
