<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectStatsController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 5;
        $projects = Project::withCount('campaigns')->paginate($perPage);
        return view('project-stats', compact('projects'));
    }
}
