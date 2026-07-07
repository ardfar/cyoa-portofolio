<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\GalleryPhoto;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'projects' => Project::count(),
            'experiences' => Experience::count(),
            'skills' => Skill::count(),
            'photos' => GalleryPhoto::count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
