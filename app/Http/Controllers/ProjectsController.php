<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Category;
use App\Models\User;

class ProjectsController extends Controller
{
    // Alle projecten orderen op ID van nieuw naar oud
    public function index(Project $project)
    {
        $projects = Project::orderBy('id', 'desc')->paginate(9);
        $categories = Category::all();

        return view('projects', compact('projects', 'categories'));
    }
    // Laat het project zien op ID
    public function show(Project $project)
    {
        return view('project', compact('project'));
    }
    // Naar create pagina en alle Categories meenemen
    public function create()
    {
        $categories = Category::all();

        return view('create', compact('categories'));
    }
    // Maak een nieuw project aan met alle ingevulde velden
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
    // Naar de edit pagina
    public function edit(Request $request, Project $project)
    {
        $categories = Category::all();

        return view('edit', compact('project', 'categories'));
    }
    // Edit het project en slaat alle changes op
    public function update(Request $request, Project $project)
    {
        $project->update($request->all());

        return redirect('projects/' . $project->id);

    }
    // Project verwijderen
    public function destroy(Request $request, Project $project)
    {
        $project->delete();

        return redirect('projects');
    }
}