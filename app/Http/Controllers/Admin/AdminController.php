<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if (!Auth::user()->is_admin) {
                abort(403, 'Unauthorized');
            }
            return $next($request);
        });
    }

    public function dashboard()
    {
        $stats = [
            'projects' => \App\Models\Project::count(),
            'messages' => \App\Models\ContactMessage::where('is_read', false)->count(),
            'skills' => \App\Models\Skill::count(),
            'experiences' => \App\Models\Experience::count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}


