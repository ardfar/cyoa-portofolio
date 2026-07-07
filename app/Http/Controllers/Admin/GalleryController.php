<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryAlbum;
use App\Models\GalleryPhoto;
use App\Services\ImageCompressionService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $albums = GalleryAlbum::with('photos')->orderBy('created_at', 'desc')->get();
        return view('admin.gallery.index', compact('albums'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $slug = Str::slug($validated['title']);
        $count = 1;
        $originalSlug = $slug;
        while (GalleryAlbum::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        $album = GalleryAlbum::create([
            'title' => $validated['title'],
            'slug' => $slug,
        ]);

        return redirect()->route('admin.gallery.edit', $album)->with('success', 'Album created. Now add some photos.');
    }

    public function edit(GalleryAlbum $gallery)
    {
        $gallery->load(['photos' => function ($query) {
            $query->orderBy('sort_order');
        }]);
        
        return view('admin.gallery.edit', ['album' => $gallery]);
    }

    public function update(Request $request, GalleryAlbum $gallery)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'cover_photo_id' => 'nullable|exists:gallery_photos,id',
        ]);

        $gallery->update($validated);

        // Update photo captions and alt text if provided
        if ($request->has('photos') && is_array($request->photos)) {
            foreach ($request->photos as $id => $data) {
                GalleryPhoto::where('id', $id)->where('album_id', $gallery->id)->update([
                    'caption' => $data['caption'] ?? null,
                    'alt_text' => $data['alt_text'] ?? null,
                ]);
            }
        }

        return redirect()->route('admin.gallery.edit', $gallery)->with('success', 'Album updated successfully.');
    }

    public function destroy(GalleryAlbum $gallery)
    {
        foreach ($gallery->photos as $photo) {
            Storage::disk('public')->delete($photo->file_path);
        }
        $gallery->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Album deleted successfully.');
    }

    public function uploadPhotos(Request $request, GalleryAlbum $gallery, ImageCompressionService $imageService)
    {
        $request->validate([
            'photos' => 'required|array',
            'photos.*' => 'image|max:10240',
        ]);

        $maxOrder = $gallery->photos()->max('sort_order') ?? 0;

        foreach ($request->file('photos') as $file) {
            $result = $imageService->compress($file, 'gallery/' . $gallery->slug);
            
            $gallery->photos()->create([
                'file_path' => $result['file_path'],
                'original_filename' => $result['original_filename'],
                'exif_data' => $result['exif_data'],
                'sort_order' => ++$maxOrder,
            ]);
        }

        return back()->with('success', 'Photos uploaded successfully.');
    }

    public function destroyPhoto(GalleryPhoto $photo)
    {
        $albumId = $photo->album_id;
        Storage::disk('public')->delete($photo->file_path);
        
        // If it was the cover photo, nullify
        $album = GalleryAlbum::find($albumId);
        if ($album && $album->cover_photo_id === $photo->id) {
            $album->update(['cover_photo_id' => null]);
        }

        $photo->delete();

        return back()->with('success', 'Photo deleted.');
    }

    public function reorderPhotos(Request $request, GalleryAlbum $gallery)
    {
        $request->validate([
            'order' => 'required|array',
            'order.*' => 'exists:gallery_photos,id',
        ]);

        foreach ($request->order as $index => $photoId) {
            GalleryPhoto::where('id', $photoId)->where('album_id', $gallery->id)->update([
                'sort_order' => $index
            ]);
        }

        return response()->json(['message' => 'Reordered successfully']);
    }
}
