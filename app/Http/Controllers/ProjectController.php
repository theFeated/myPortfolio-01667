<?php

namespace App\Http\Controllers;
use App\Models\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function projects()
    {
        $projects = Project::latest()->paginate(3);
        return view('projects', compact('projects'));   
    }
}
