<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Setting;

class InitialDataSeeder extends Seeder
{
    public function run(): void
    {
        // Seed Projects
        $projects = [
            [
                'title' => 'StudentMove – Smart Transportation App',
                'description' => 'A complete mobile solution for students to book and track transportation in real time. Designed seamless onboarding, booking flows, and route-tracking interfaces with a focus on simplicity and usability.',
                'tech_tags' => ['Figma', 'Mobile UI', 'UX Design'],
                'category' => 'Mobile App',
                'is_featured' => true,
                'is_active' => true,
                'order' => 1,
            ],
            [
                'title' => 'ERP Dashboard UI',
                'description' => 'An enterprise-grade dashboard design for business management systems. Built scalable components, data visualization layouts, and responsive design systems ready for developer handoff.',
                'tech_tags' => ['Dashboard UI', 'Design System', 'Data Viz'],
                'category' => 'Dashboard',
                'is_featured' => true,
                'is_active' => true,
                'order' => 2,
            ],
            [
                'title' => 'Finance & Consulting Landing Pages',
                'description' => 'Professional landing page templates created for ThemeForest, optimized for conversion and clean visual hierarchy with strong typography and color systems.',
                'tech_tags' => ['Landing Page', 'Typography', 'Conversion'],
                'category' => 'Landing Page',
                'is_featured' => true,
                'is_active' => true,
                'order' => 3,
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(
                ['title' => $project['title']],
                $project
            );
        }

        // Seed Skills
        $skills = [
            [
                'title' => 'User-Centered Design Thinking',
                'description' => 'Creating designs that prioritize user needs and business goals',
                'icon' => '🎨',
                'order' => 1,
            ],
            [
                'title' => 'Figma Prototyping',
                'description' => 'Auto-layout, Components, Design Systems',
                'icon' => '🧩',
                'order' => 2,
            ],
            [
                'title' => 'Responsive UI Design',
                'description' => 'Web, Mobile, and Dashboard interfaces',
                'icon' => '📱',
                'order' => 3,
            ],
            [
                'title' => 'Wireframing & User Flows',
                'description' => 'Structuring information architecture',
                'icon' => '🔍',
                'order' => 4,
            ],
            [
                'title' => 'Feedback-driven Iteration',
                'description' => 'Continuous improvement and developer handoff',
                'icon' => '🔁',
                'order' => 5,
            ],
            [
                'title' => 'AI-Assisted Design Workflows',
                'description' => 'Copy, naming, brainstorming with AI tools',
                'icon' => '🤖',
                'order' => 6,
            ],
        ];

        foreach ($skills as $skill) {
            Skill::updateOrCreate(
                ['title' => $skill['title']],
                $skill
            );
        }

        // Seed Experiences
        $experiences = [
            [
                'title' => 'Accenture North America',
                'description' => 'Product Design Simulation on Forage, focusing on feature iteration and UX improvements',
                'icon' => '✅',
                'order' => 1,
            ],
            [
                'title' => 'Real-world Projects',
                'description' => 'Contributed to task-based internships, applying practical design thinking to solve user problems',
                'icon' => '💼',
                'order' => 2,
            ],
            [
                'title' => 'Remote Collaboration',
                'description' => 'Frequently applies for remote roles to expand skills and collaborate on diverse product teams',
                'icon' => '🌍',
                'order' => 3,
            ],
        ];

        foreach ($experiences as $experience) {
            Experience::updateOrCreate(
                ['title' => $experience['title']],
                $experience
            );
        }

        // Seed Settings (default values)
        $defaultSettings = [
            'profile_name' => 'Md Julfikar Hasan',
            'profile_role' => 'UI/UX DESIGNER',
            'profile_bio' => 'UI/UX Designer • Frontend Developer • Creative Problem Solver',
            'profile_image' => 'assets/images/profile.jpg',
            'resume_file' => 'assets/Md_Julfikar_Hasan_CV.pdf',
            'experience_years' => '1.5',
            'clients_count' => '5',
            'projects_count' => '12+',
            'about_text_1' => '👋 Hi, I\'m Md Julfikar Hasan – UI/UX Designer',
            'about_text_2' => 'I design intuitive digital experiences that solve real problems and bring ideas to life. Passionate about user-centered design, AI-driven workflows, and creating products that people love to use.',
            'about_text_3' => 'I\'m currently pursuing my BSc in Computer Science & Engineering at Daffodil International University, blending technical understanding with creative design skills. My approach is driven by user-centered design thinking, rapid prototyping in Figma, and a love for solving complex design challenges with simple, functional solutions.',
            'contact_email' => 'mdjulfikerhasan191212@gmail.com',
            'contact_phone' => '+8801890770297',
            'contact_location' => 'Bangladesh',
            'behance_url' => 'https://www.behance.net/mdjulfikerhasan',
            'linkedin_url' => 'https://www.linkedin.com/in/md-julfikar-hasan-282249215',
            'dribbble_url' => 'https://dribbble.com/hasan1912',
            'github_url' => 'https://github.com/Julfiker-NpM',
        ];

        foreach ($defaultSettings as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }
    }
}

