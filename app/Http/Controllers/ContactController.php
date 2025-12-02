<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        try {
            $settings = [
                'email' => Setting::get('contact_email', 'mdjulfikerhasan191212@gmail.com'),
                'phone' => Setting::get('contact_phone', '+8801890770297'),
                'location' => Setting::get('contact_location', 'Bangladesh'),
                'behance_url' => Setting::get('behance_url', 'https://www.behance.net/mdjulfikerhasan'),
                'linkedin_url' => Setting::get('linkedin_url', 'https://www.linkedin.com/in/md-julfikar-hasan-282249215'),
                'dribbble_url' => Setting::get('dribbble_url', 'https://dribbble.com/hasan1912'),
                'github_url' => Setting::get('github_url', 'https://github.com/Julfiker-NpM'),
            ];
        } catch (\Exception $e) {
            $settings = [
                'email' => 'mdjulfikerhasan191212@gmail.com',
                'phone' => '+8801890770297',
                'location' => 'Bangladesh',
                'behance_url' => 'https://www.behance.net/mdjulfikerhasan',
                'linkedin_url' => 'https://www.linkedin.com/in/md-julfikar-hasan-282249215',
                'dribbble_url' => 'https://dribbble.com/hasan1912',
                'github_url' => 'https://github.com/Julfiker-NpM',
            ];
        }
        
        return view('pages.contact', compact('settings'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        try {
            ContactMessage::create($validated);
            return redirect()->route('contact')->with('success', 'Message sent successfully!');
        } catch (\Exception $e) {
            return redirect()->route('contact')->with('error', 'Database not configured. Please configure database first.');
        }
    }
}

