@extends('layouts.app')

@section('title', 'About - Md Julfikar Hasan')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')
    <section class="about-section">
        <h1>About Me</h1>
        <div class="about-content">
            <img src="{{ asset('assets/images/profile.jpg') }}" alt="Md Julfikar Hasan" class="about-img">
            <div class="about-text">
                <p>{{ $settings['about_text_1'] ?? '👋 Hi, I\'m Md Julfikar Hasan – UI/UX Designer' }}</p>
                <p>{{ $settings['about_text_2'] ?? 'I design intuitive digital experiences that solve real problems and bring ideas to life. Passionate about user-centered design, AI-driven workflows, and creating products that people love to use.' }}</p>
                <p>{{ $settings['about_text_3'] ?? 'I\'m currently pursuing my BSc in Computer Science & Engineering at Daffodil International University, blending technical understanding with creative design skills. My approach is driven by user-centered design thinking, rapid prototyping in Figma, and a love for solving complex design challenges with simple, functional solutions.' }}</p>
                <p>I enjoy exploring the intersection of design and AI, using tools like ChatGPT and AI-powered plugins to enhance creativity and accelerate workflows — while always keeping the human touch at the core of my work.</p>
            </div>
        </div>
        
        <div class="skills-section">
            <h2>🧠 Skills & Expertise</h2>
            <div class="skills-grid">
                @forelse($skills as $skill)
                    <div class="skill-item">
                        <h3>{{ $skill->icon ?? '🎨' }} {{ $skill->title }}</h3>
                        <p>{{ $skill->description }}</p>
                    </div>
                @empty
                    <div class="skill-item">
                        <h3>🎨 User-Centered Design Thinking</h3>
                        <p>Creating designs that prioritize user needs and business goals</p>
                    </div>
                    <div class="skill-item">
                        <h3>🧩 Figma Prototyping</h3>
                        <p>Auto-layout, Components, Design Systems</p>
                    </div>
                    <div class="skill-item">
                        <h3>📱 Responsive UI Design</h3>
                        <p>Web, Mobile, and Dashboard interfaces</p>
                    </div>
                    <div class="skill-item">
                        <h3>🔍 Wireframing & User Flows</h3>
                        <p>Structuring information architecture</p>
                    </div>
                    <div class="skill-item">
                        <h3>🔁 Feedback-driven Iteration</h3>
                        <p>Continuous improvement and developer handoff</p>
                    </div>
                    <div class="skill-item">
                        <h3>🤖 AI-Assisted Design Workflows</h3>
                        <p>Copy, naming, brainstorming with AI tools</p>
                    </div>
                @endforelse
            </div>
        </div>
        
        <div class="experience-section">
            <h2>🎓 Experience & Achievements</h2>
            <div class="experience-grid">
                @forelse($experiences as $experience)
                    <div class="experience-item">
                        <h3>{{ $experience->icon ?? '✅' }} {{ $experience->title }}</h3>
                        <p>{{ $experience->description }}</p>
                    </div>
                @empty
                    <div class="experience-item">
                        <h3>✅ Accenture North America</h3>
                        <p>Product Design Simulation on Forage, focusing on feature iteration and UX improvements</p>
                    </div>
                    <div class="experience-item">
                        <h3>💼 Real-world Projects</h3>
                        <p>Contributed to task-based internships, applying practical design thinking to solve user problems</p>
                    </div>
                    <div class="experience-item">
                        <h3>🌍 Remote Collaboration</h3>
                        <p>Frequently applies for remote roles to expand skills and collaborate on diverse product teams</p>
                    </div>
                @endforelse
            </div>
        </div>
        
        <div class="process-section">
            <h2>🧭 My Design Process</h2>
            <div class="process-grid">
                <div class="process-item">
                    <span class="process-number">1</span>
                    <h3>🧠 Research & Empathy</h3>
                    <p>Understand user needs and business goals</p>
                </div>
                <div class="process-item">
                    <span class="process-number">2</span>
                    <h3>✏️ Wireframing</h3>
                    <p>Sketch ideas and test early structure</p>
                </div>
                <div class="process-item">
                    <span class="process-number">3</span>
                    <h3>🧪 Prototyping</h3>
                    <p>Bring ideas to life interactively in Figma</p>
                </div>
                <div class="process-item">
                    <span class="process-number">4</span>
                    <h3>🔁 Feedback & Iteration</h3>
                    <p>Refine designs based on input</p>
                </div>
                <div class="process-item">
                    <span class="process-number">5</span>
                    <h3>🚀 Developer Handoff</h3>
                    <p>Prepare final assets and documentation</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    <footer>
        <p>&copy; {{ date('Y') }} Md Julfikar Hasan. All rights reserved.</p>
    </footer>
@endsection

@push('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endpush


