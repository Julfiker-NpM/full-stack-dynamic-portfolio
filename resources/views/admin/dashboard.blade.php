@extends('admin.layout')

@section('title', 'Admin Dashboard')

@push('styles')
<style>
    .dashboard-wrapper {
        padding: 2rem;
    }
    
    .dashboard-header {
        margin-bottom: 2rem;
    }
    
    .dashboard-header h2 {
        font-size: 2rem;
        color: #fff;
        margin-bottom: 0.5rem;
    }
    
    .dashboard-header p {
        color: #888;
        font-size: 0.9rem;
    }
    
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
    }
    
    .stat-card {
        background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%);
        border: 1px solid #333;
        border-radius: 12px;
        padding: 2rem;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #00ff88, #00cc6a);
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 255, 136, 0.2);
        border-color: #00ff88;
    }
    
    .stat-card-icon {
        font-size: 2.5rem;
        margin-bottom: 1rem;
    }
    
    .stat-card-value {
        font-size: 2.5rem;
        font-weight: bold;
        color: #00ff88;
        margin-bottom: 0.5rem;
    }
    
    .stat-card-label {
        color: #aaa;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .stat-card-link {
        display: block;
        margin-top: 1rem;
        color: #00ff88;
        text-decoration: none;
        font-size: 0.85rem;
        opacity: 0.8;
    }
    
    .stat-card-link:hover {
        opacity: 1;
    }
    
    .dashboard-sections {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.5rem;
    }
    
    .dashboard-section {
        background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%);
        border: 1px solid #333;
        border-radius: 12px;
        padding: 2rem;
    }
    
    .dashboard-section h3 {
        color: #fff;
        font-size: 1.3rem;
        margin-bottom: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid #00ff88;
    }
    
    .quick-link {
        display: flex;
        align-items: center;
        padding: 1rem;
        background: #1a1a1a;
        border-radius: 8px;
        margin-bottom: 0.75rem;
        text-decoration: none;
        color: #aaa;
        transition: all 0.3s ease;
        border-left: 3px solid transparent;
    }
    
    .quick-link:hover {
        background: #252525;
        color: #00ff88;
        border-left-color: #00ff88;
        transform: translateX(5px);
    }
    
    .quick-link-icon {
        font-size: 1.2rem;
        margin-right: 1rem;
        width: 30px;
        text-align: center;
    }
    
    .quick-link-text {
        flex: 1;
    }
    
    .quick-link-arrow {
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .quick-link:hover .quick-link-arrow {
        opacity: 1;
    }
    
    .welcome-card {
        background: linear-gradient(135deg, #00ff88 0%, #00cc6a 100%);
        border-radius: 12px;
        padding: 2rem;
        color: #000;
        margin-bottom: 2rem;
    }
    
    .welcome-card h3 {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
    }
    
    .welcome-card p {
        opacity: 0.8;
    }
</style>
@endpush

@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-header">
        <h2>Dashboard Overview</h2>
        <p>Welcome back, {{ auth()->user()->name }}! Here's what's happening with your portfolio.</p>
    </div>
    
    <div class="welcome-card">
        <h3>🎉 Welcome to Admin Panel</h3>
        <p>Manage your portfolio content, view messages, and update settings from here.</p>
    </div>
    
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-card-icon">📁</div>
            <div class="stat-card-value">{{ $stats['projects'] }}</div>
            <div class="stat-card-label">Total Projects</div>
            <a href="{{ route('admin.projects.index') }}" class="stat-card-link">View All →</a>
        </div>
        
        <div class="stat-card">
            <div class="stat-card-icon">✉️</div>
            <div class="stat-card-value">{{ $stats['messages'] }}</div>
            <div class="stat-card-label">Unread Messages</div>
            <a href="{{ route('admin.messages.index') }}" class="stat-card-link">View Messages →</a>
        </div>
        
        <div class="stat-card">
            <div class="stat-card-icon">🎨</div>
            <div class="stat-card-value">{{ $stats['skills'] }}</div>
            <div class="stat-card-label">Skills</div>
            <a href="{{ route('admin.skills.index') }}" class="stat-card-link">Manage Skills →</a>
        </div>
        
        <div class="stat-card">
            <div class="stat-card-icon">💼</div>
            <div class="stat-card-value">{{ $stats['experiences'] }}</div>
            <div class="stat-card-label">Experiences</div>
            <a href="{{ route('admin.experiences.index') }}" class="stat-card-link">Manage Experiences →</a>
        </div>
    </div>
    
    <div class="dashboard-sections">
        <div class="dashboard-section">
            <h3>Quick Links</h3>
            <a href="{{ route('admin.projects.create') }}" class="quick-link">
                <span class="quick-link-icon">➕</span>
                <span class="quick-link-text">Add New Project</span>
                <span class="quick-link-arrow">→</span>
            </a>
            <a href="{{ route('admin.skills.create') }}" class="quick-link">
                <span class="quick-link-icon">🎯</span>
                <span class="quick-link-text">Add New Skill</span>
                <span class="quick-link-arrow">→</span>
            </a>
            <a href="{{ route('admin.experiences.create') }}" class="quick-link">
                <span class="quick-link-icon">⭐</span>
                <span class="quick-link-text">Add New Experience</span>
                <span class="quick-link-arrow">→</span>
            </a>
            <a href="{{ route('admin.settings.index') }}" class="quick-link">
                <span class="quick-link-icon">⚙️</span>
                <span class="quick-link-text">Update Settings</span>
                <span class="quick-link-arrow">→</span>
            </a>
        </div>
        
        <div class="dashboard-section">
            <h3>Manage Content</h3>
            <a href="{{ route('admin.projects.index') }}" class="quick-link">
                <span class="quick-link-icon">📁</span>
                <span class="quick-link-text">All Projects ({{ $stats['projects'] }})</span>
                <span class="quick-link-arrow">→</span>
            </a>
            <a href="{{ route('admin.messages.index') }}" class="quick-link">
                <span class="quick-link-icon">✉️</span>
                <span class="quick-link-text">Contact Messages</span>
                <span class="quick-link-arrow">→</span>
            </a>
            <a href="{{ route('admin.skills.index') }}" class="quick-link">
                <span class="quick-link-icon">🎨</span>
                <span class="quick-link-text">Skills & Expertise</span>
                <span class="quick-link-arrow">→</span>
            </a>
            <a href="{{ route('admin.experiences.index') }}" class="quick-link">
                <span class="quick-link-icon">💼</span>
                <span class="quick-link-text">Experiences</span>
                <span class="quick-link-arrow">→</span>
            </a>
        </div>
        
        <div class="dashboard-section">
            <h3>View Website</h3>
            <a href="{{ route('home') }}" target="_blank" class="quick-link">
                <span class="quick-link-icon">🌐</span>
                <span class="quick-link-text">Visit Homepage</span>
                <span class="quick-link-arrow">→</span>
            </a>
            <a href="{{ route('about') }}" target="_blank" class="quick-link">
                <span class="quick-link-icon">👤</span>
                <span class="quick-link-text">View About Page</span>
                <span class="quick-link-arrow">→</span>
            </a>
            <a href="{{ route('works') }}" target="_blank" class="quick-link">
                <span class="quick-link-icon">💼</span>
                <span class="quick-link-text">View Works Page</span>
                <span class="quick-link-arrow">→</span>
            </a>
            <a href="{{ route('contact') }}" target="_blank" class="quick-link">
                <span class="quick-link-icon">📧</span>
                <span class="quick-link-text">View Contact Page</span>
                <span class="quick-link-arrow">→</span>
            </a>
        </div>
    </div>
</div>
@endsection
