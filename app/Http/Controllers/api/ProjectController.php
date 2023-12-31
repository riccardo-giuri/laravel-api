<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();

        return response()->json($projects);
    }

    public function show($slug) {
        $project = Project::where("slug", $slug)
        ->first();

        return response()->json($project);
    }
}
