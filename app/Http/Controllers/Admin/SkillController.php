<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::withCount('certifications')->orderBy('category')->orderBy('name')->get();
        
        // Group by category
        $skillsByCategory = $skills->groupBy('category');

        return view('admin.skills.index', compact('skillsByCategory'));
    }

    public function create()
    {
        // Get unique categories for datalist
        $categories = Skill::select('category')->distinct()->pluck('category');
        return view('admin.skills.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'persona_tags' => 'nullable|array',
            'persona_tags.*' => 'in:tech,management,creative',
        ]);

        Skill::create($validated);

        return redirect()->route('admin.skills.index')->with('success', 'Skill created successfully.');
    }

    public function edit(Skill $skill)
    {
        $categories = Skill::select('category')->distinct()->pluck('category');
        $skill->load('certifications');
        return view('admin.skills.edit', compact('skill', 'categories'));
    }

    public function update(Request $request, Skill $skill)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'persona_tags' => 'nullable|array',
            'persona_tags.*' => 'in:tech,management,creative',
        ]);

        if (!isset($validated['persona_tags'])) {
            $validated['persona_tags'] = null;
        }

        $skill->update($validated);

        return redirect()->route('admin.skills.index')->with('success', 'Skill updated successfully.');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('admin.skills.index')->with('success', 'Skill deleted successfully.');
    }
}
