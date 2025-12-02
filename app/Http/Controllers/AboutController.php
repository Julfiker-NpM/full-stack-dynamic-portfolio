<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Experience;
use App\Models\Setting;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        try {
            $skills = Skill::orderBy('order')->get();
            $experiences = Experience::orderBy('order')->get();
        } catch (\Exception $e) {
            $skills = collect([]);
            $experiences = collect([]);
        }
        
        try {
            $settings = [
                'about_text_1' => Setting::get('about_text_1', '👋 Hi, I\'m Md Julfikar Hasan – UI/UX Designer'),
                'about_text_2' => Setting::get('about_text_2', 'I design intuitive digital experiences that solve real problems and bring ideas to life.'),
                'about_text_3' => Setting::get('about_text_3', 'I\'m currently pursuing my BSc in Computer Science & Engineering at Daffodil International University.'),
                'profile_image' => Setting::get('profile_image', 'assets/images/profile.jpg'),
            ];
        } catch (\Exception $e) {
            $settings = [
                'about_text_1' => '👋 Hi, I\'m Md Julfikar Hasan – UI/UX Designer',
                'about_text_2' => 'I design intuitive digital experiences that solve real problems and bring ideas to life.',
                'about_text_3' => 'I\'m currently pursuing my BSc in Computer Science & Engineering at Daffodil International University.',
                'profile_image' => 'assets/images/profile.jpg',
            ];
        }
        
        return view('pages.about', compact('skills', 'experiences', 'settings'));
    }
}

