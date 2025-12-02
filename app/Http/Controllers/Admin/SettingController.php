<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $settings = [
            'profile_name' => Setting::get('profile_name', 'Md Julfikar Hasan'),
            'profile_role' => Setting::get('profile_role', 'UI/UX DESIGNER'),
            'profile_bio' => Setting::get('profile_bio', 'UI/UX Designer • Frontend Developer • Creative Problem Solver'),
            'profile_image' => Setting::get('profile_image', 'assets/images/profile.jpg'),
            'resume_file' => Setting::get('resume_file', 'assets/Md_Julfikar_Hasan_CV.pdf'),
            'experience_years' => Setting::get('experience_years', '1.5'),
            'clients_count' => Setting::get('clients_count', '5'),
            'projects_count' => Setting::get('projects_count', '12+'),
            'about_text_1' => Setting::get('about_text_1', '👋 Hi, I\'m Md Julfikar Hasan – UI/UX Designer'),
            'about_text_2' => Setting::get('about_text_2', 'I design intuitive digital experiences...'),
            'about_text_3' => Setting::get('about_text_3', 'I\'m currently pursuing my BSc...'),
            'contact_email' => Setting::get('contact_email', 'mdjulfikerhasan191212@gmail.com'),
            'contact_phone' => Setting::get('contact_phone', '+8801890770297'),
            'contact_location' => Setting::get('contact_location', 'Bangladesh'),
            'behance_url' => Setting::get('behance_url', 'https://www.behance.net/mdjulfikerhasan'),
            'linkedin_url' => Setting::get('linkedin_url', 'https://www.linkedin.com/in/md-julfikar-hasan-282249215'),
            'dribbble_url' => Setting::get('dribbble_url', 'https://dribbble.com/hasan1912'),
            'github_url' => Setting::get('github_url', 'https://github.com/Julfiker-NpM'),
        ];

        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $fields = [
            'profile_name', 'profile_role', 'profile_bio', 'experience_years',
            'clients_count', 'projects_count', 'about_text_1', 'about_text_2',
            'about_text_3', 'contact_email', 'contact_phone', 'contact_location',
            'behance_url', 'linkedin_url', 'dribbble_url', 'github_url'
        ];

        foreach ($fields as $field) {
            if ($request->has($field)) {
                Setting::set($field, $request->input($field));
            }
        }

        if ($request->hasFile('profile_image')) {
            $path = $request->file('profile_image')->store('profile', 'public');
            Setting::set('profile_image', $path);
        }

        if ($request->hasFile('resume_file')) {
            $path = $request->file('resume_file')->store('resume', 'public');
            Setting::set('resume_file', $path);
        }

        return redirect()->route('admin.settings.index')->with('success', 'Settings updated successfully!');
    }
}


