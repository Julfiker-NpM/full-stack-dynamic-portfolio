<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Md Julfikar Hasan - Portfolio')</title>
    @stack('styles')
</head>
<body>
    <header>
        <div class="logo">
            <span class="logo-text">JULFIKAR</span>
            <span class="logo-dot"></span>
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                <li><a href="{{ route('works') }}" class="{{ request()->routeIs('works') ? 'active' : '' }}">Works</a></li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
        </nav>
        @php
            $resumePath = isset($settings['resume_file']) ? (str_starts_with($settings['resume_file'], 'storage/') ? asset($settings['resume_file']) : asset('storage/' . $settings['resume_file'])) : asset('assets/Md_Julfikar_Hasan_CV.pdf');
        @endphp
        <a href="{{ $resumePath }}" class="resume-btn" download>My Resume</a>
    </header>

    <main>
        @yield('content')
    </main>

    @hasSection('footer')
        @yield('footer')
    @endif

    @stack('scripts')
</body>
</html>
