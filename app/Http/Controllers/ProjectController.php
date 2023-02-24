<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::paginate(5);
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {


        Project::create([
            'project_name' => $request->name,

        ]);

        return redirect('/projects')->with('success', 'Project created successfully!');
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request,$id)
    {
         $project = Project::find($id);

         $project->update([
            'project_name' => $request->name
        ]);

        return redirect('/projects')->with('success', 'Project updated successfully!');
    }

    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect('/projects')->with('success', 'Project deleted successfully!');
    }
}
