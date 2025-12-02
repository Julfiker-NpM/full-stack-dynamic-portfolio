@extends('layouts.app')

@section('title', 'Works - Md Julfikar Hasan')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/works.css') }}">
@endpush

@section('content')
    <section class="works-section">
        <h1>My Works</h1>
        <div class="works-grid">
            @forelse($projects as $project)
                <div class="work-item">
                    <div class="work-image">
                        @if($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">
                        @else
                            <div class="project-mockup mobile-app"></div>
                        @endif
                    </div>
                    <h3>{{ $project->icon ?? '📱' }} {{ $project->title }}</h3>
                    <p>{{ $project->description }}</p>
                    @if($project->tech_tags && is_array($project->tech_tags))
                        <div class="work-tech">
                            @foreach($project->tech_tags as $tag)
                                <span class="tech-tag">{{ $tag }}</span>
                            @endforeach
                        </div>
                    @endif
                    @if($project->project_url)
                        <a href="{{ $project->project_url }}" target="_blank" class="project-link">View Project →</a>
                    @endif
                </div>
            @empty
                <div class="work-item">
                    <div class="work-image">
                        <div class="project-mockup mobile-app"></div>
                    </div>
                    <h3>📱 StudentMove – Smart Transportation App</h3>
                    <p>A complete mobile solution for students to book and track transportation in real time. Designed seamless onboarding, booking flows, and route-tracking interfaces with a focus on simplicity and usability.</p>
                    <div class="work-tech">
                        <span class="tech-tag">Figma</span>
                        <span class="tech-tag">Mobile UI</span>
                        <span class="tech-tag">UX Design</span>
                    </div>
                </div>
                <div class="work-item">
                    <div class="work-image">
                        <div class="project-mockup dashboard"></div>
                    </div>
                    <h3>📊 ERP Dashboard UI</h3>
                    <p>An enterprise-grade dashboard design for business management systems. Built scalable components, data visualization layouts, and responsive design systems ready for developer handoff.</p>
                    <div class="work-tech">
                        <span class="tech-tag">Dashboard UI</span>
                        <span class="tech-tag">Design System</span>
                        <span class="tech-tag">Data Viz</span>
                    </div>
                </div>
                <div class="work-item">
                    <div class="work-image">
                        <div class="project-mockup landing"></div>
                    </div>
                    <h3>💼 Finance & Consulting Landing Pages</h3>
                    <p>Professional landing page templates created for ThemeForest, optimized for conversion and clean visual hierarchy with strong typography and color systems.</p>
                    <div class="work-tech">
                        <span class="tech-tag">Landing Page</span>
                        <span class="tech-tag">Typography</span>
                        <span class="tech-tag">Conversion</span>
                    </div>
                </div>
            @endforelse
        </div>
    </section>
@endsection

@section('footer')
    <footer>
        <p>&copy; {{ date('Y') }} Md Julfikar Hasan. All rights reserved.</p>
    </footer>
@endsection

@push('scripts')
    <script src="{{ asset('js/works.js') }}"></script>
@endpush


