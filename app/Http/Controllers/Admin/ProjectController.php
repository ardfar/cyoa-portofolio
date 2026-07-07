<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Services\ImageCompressionService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::query();

        if ($request->filled('persona')) {
            $query->where('persona', $request->persona);
        }

        $projects = $query->orderBy('sort_order')->orderBy('created_at', 'desc')->paginate(15);

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request, ImageCompressionService $imageService)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:projects,slug',
            'persona' => 'required|in:tech,management,creative',
            'body' => 'nullable|string',
            'is_featured' => 'boolean',
            'sort_order' => 'integer',
            'cover_image' => 'nullable|image|max:10240', // 10MB max initial
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
            // Uniqueness check
            $count = 1;
            $originalSlug = $validated['slug'];
            while (Project::where('slug', $validated['slug'])->exists()) {
                $validated['slug'] = $originalSlug . '-' . $count++;
            }
        }

        if ($request->hasFile('cover_image')) {
            $result = $imageService->compress($request->file('cover_image'), 'projects');
            $validated['cover_image'] = $result['file_path'];
        }

        $validated['is_featured'] = $request->has('is_featured');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        Project::create($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project, ImageCompressionService $imageService)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:projects,slug,' . $project->id,
            'persona' => 'required|in:tech,management,creative',
            'body' => 'nullable|string',
            'is_featured' => 'boolean',
            'sort_order' => 'integer',
            'cover_image' => 'nullable|image|max:10240',
        ]);

        if ($request->hasFile('cover_image')) {
            // Delete old
            if ($project->cover_image) {
                Storage::disk('public')->delete($project->cover_image);
            }
            $result = $imageService->compress($request->file('cover_image'), 'projects');
            $validated['cover_image'] = $result['file_path'];
        }

        $validated['is_featured'] = $request->has('is_featured');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        $project->update($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        if ($project->cover_image) {
            Storage::disk('public')->delete($project->cover_image);
        }
        
        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }
}
