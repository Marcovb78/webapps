<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Category;
use App\Models\User;

class ProjectsController extends Controller
{

    public function index(Project $project)
    {
        $projects = Project::orderBy('id', 'desc')->paginate(9);
        $categories = Category::all();

        return view('projects', compact('projects', 'categories'));
    }

    public function show(Project $project)
    {
        return view('project', compact('project'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('create', compact('categories'));
    }

    public function store(Request $request)
    {
        $projects = new Project();

        $projects->title = $request->title;
        $projects->description = $request->description;
        $projects->category_id = $request->category;
        $projects->user_id = Auth::id();

        $projects->save();

        return redirect('projects');
    }

    public function edit(Request $request, Project $project)
    {
        $categories = Category::all();

        return view('edit', compact('project', 'categories'));
    }

    public function update(Request $request, Project $project)
    {
        $project->update($request->all());

        return redirect('projects');
    }

    public function destroy(Request $request, Project $project)
    {
        $project->delete();

        return redirect('projects');
    }
}