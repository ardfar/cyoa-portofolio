<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certification;
use App\Models\Skill;
use App\Services\ImageCompressionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertificationController extends Controller
{
    public function store(Request $request, Skill $skill, ImageCompressionService $imageService)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'issuer' => 'required|string|max:255',
            'issue_date' => 'nullable|date',
            'badge_image' => 'nullable|image|max:10240',
        ]);

        if ($request->hasFile('badge_image')) {
            $result = $imageService->compress($request->file('badge_image'), 'certifications');
            $validated['badge_image'] = $result['file_path'];
        }

        $skill->certifications()->create($validated);

        return redirect()->route('admin.skills.edit', $skill)->with('success', 'Certification added successfully.');
    }

    public function update(Request $request, Certification $certification, ImageCompressionService $imageService)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'issuer' => 'required|string|max:255',
            'issue_date' => 'nullable|date',
            'badge_image' => 'nullable|image|max:10240',
        ]);

        if ($request->hasFile('badge_image')) {
            if ($certification->badge_image) {
                Storage::disk('public')->delete($certification->badge_image);
            }
            $result = $imageService->compress($request->file('badge_image'), 'certifications');
            $validated['badge_image'] = $result['file_path'];
        }

        $certification->update($validated);

        return redirect()->route('admin.skills.edit', $certification->skill_id)->with('success', 'Certification updated successfully.');
    }

    public function destroy(Certification $certification)
    {
        $skillId = $certification->skill_id;
        
        if ($certification->badge_image) {
            Storage::disk('public')->delete($certification->badge_image);
        }
        
        $certification->delete();

        return redirect()->route('admin.skills.edit', $skillId)->with('success', 'Certification deleted successfully.');
    }
}
