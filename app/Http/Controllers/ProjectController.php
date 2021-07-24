<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function create(Request $request)
    {
        $file = Storage::disk('public')->put('/', $request->file('file'));
        $project = new Project();
        $project->project_url = $request->get('project_url');
        $project->file_path = 'storage/'.$file;
        $project->save();
        return $project;
    }
}
