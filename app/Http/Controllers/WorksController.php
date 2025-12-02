<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function index()
    {
        try {
            $projects = Project::where('is_active', true)
                ->orderBy('order')
                ->get();
        } catch (\Exception $e) {
            $projects = collect([]);
        }
        
        return view('pages.works', compact('projects'));
    }
}

