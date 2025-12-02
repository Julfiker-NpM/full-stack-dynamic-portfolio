@extends('layouts.app')

@section('title', 'Md Julfikar Hasan - Portfolio')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
    <div class="container">
        <!-- Top Row -->
        <div class="grid-row">
            <a href="{{ route('about') }}" class="profile-card large-card card-link">
                <div class="profile-content">
                    <div class="profile-image">
                        <img src="{{ asset('assets/images/profile.jpg') }}" alt="Md Julfikar Hasan">
                    </div>
                    <div class="profile-info">
                        <span class="role">{{ $settings['role'] ?? 'UI/UX DESIGNER' }}</span>
                        <h1>{{ $settings['name'] ?? 'Md Julfikar Hasan' }}</h1>
                        <p>{{ $settings['bio'] ?? 'UI/UX Designer • Frontend Developer • Creative Problem Solver' }}</p>
                        <div class="more-icon">→</div>
                    </div>
                </div>
            </a>
            
            <div class="projects-banner">
                @forelse($featuredProjects as $project)
                    <span>{{ $project->title }}</span>@if(!$loop->last) • @endif
                @empty
                    <span>StudentMove App</span> • <span>ERP Dashboard UI</span> • <span>Finance Landing Pages</span>
                @endforelse
            </div>
        </div>

        <!-- Middle Row -->
        <div class="grid-row">
            <a href="{{ route('works') }}" class="card showcase-card card-link">
                <div class="card-content">
                    <div class="showcase-image">
                        <div class="device-mockup">
                            <div class="device phone"></div>
                            <div class="device phone"></div>
                            <div class="device laptop"></div>
                        </div>
                    </div>
                    <span class="card-label">SHOWCASE</span>
                    <h3>Projects</h3>
                    <div class="more-icon">→</div>
                </div>
            </a>
        </div>

        <!-- Bottom Row -->
        <div class="grid-row">
            <div class="stats-card">
                <div class="stat-item">
                    <span class="stat-number">{{ $settings['experience_years'] ?? '1.5' }}</span>
                    <span class="stat-label">YEARS EXPERIENCE</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">{{ $settings['clients_count'] ?? '5' }}</span>
                    <span class="stat-label">CLIENTS WORLDWIDE</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">{{ $settings['projects_count'] ?? '12+' }}</span>
                    <span class="stat-label">TOTAL PROJECTS</span>
                </div>
            </div>
            
            <a href="{{ route('contact') }}" class="card work-together-card card-link">
                <div class="card-content">
                    <div class="star-icon">★</div>
                    <h2>Let's work <span class="highlight">together.</span></h2>
                    <div class="more-icon">→</div>
                </div>
            </a>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endpush


