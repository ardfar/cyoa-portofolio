<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;

class ImageCompressionService
{
    /**
     * Compress and store an uploaded image.
     *
     * @param UploadedFile $file
     * @param string $context (e.g., 'projects', 'gallery', 'avatars')
     * @return array
     */
    public function compress(UploadedFile $file, string $context): array
    {
        $manager = new ImageManager(new Driver());
        $image = $manager->read($file->getRealPath());

        // Extract EXIF data if JPEG
        $exifData = [];
        if (in_array($file->getMimeType(), ['image/jpeg', 'image/jpg'])) {
            $rawExif = @exif_read_data($file->getRealPath());
            if ($rawExif) {
                // Filter out large/binary EXIF fields to keep JSON small
                $exifData = array_filter($rawExif, function ($value) {
                    return is_scalar($value) || is_array($value);
                });
                unset($exifData['MakerNote'], $exifData['UserComment']);
            }
        }

        // Resize if width > 1920px (maintain aspect ratio)
        if ($image->width() > 1920) {
            $image->scaleDown(width: 1920);
        }

        $quality = 80;
        $filename = Str::random(40) . '.webp'; // Converting to WebP for better compression
        
        // Encode as WebP initially
        $encoded = $image->toWebp($quality);

        // Iterate quality down if output size > 1MB
        // 1MB = 1048576 bytes
        while (strlen($encoded->toString()) > 1048576 && $quality > 10) {
            $quality -= 10;
            $encoded = $image->toWebp($quality);
        }

        $path = $context . '/' . $filename;
        Storage::disk('public')->put($path, $encoded->toString());

        return [
            'file_path' => $path,
            'original_filename' => $file->getClientOriginalName(),
            'exif_data' => !empty($exifData) ? $exifData : null,
        ];
    }
}
