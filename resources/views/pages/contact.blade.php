@extends('layouts.app')

@section('title', 'Contact - Md Julfikar Hasan')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
    <section class="contact-section">
        <h1>Contact Me</h1>
        <div class="contact-content">
            <div class="contact-info">
                <h3>Get in Touch</h3>
                <p>📨 Email: {{ $settings['email'] ?? 'mdjulfikerhasan191212@gmail.com' }}</p>
                <p>📱 Mobile: {{ $settings['phone'] ?? '+8801890770297' }}</p>
                <p>🌍 Location: {{ $settings['location'] ?? 'Bangladesh' }}</p>
                <p>🎨 Portfolio: Behance – Md Julfikar Hasan</p>
                
                <div class="social-links">
                    <h4>Connect with me</h4>
                    <div class="social-grid">
                        <a href="{{ $settings['behance_url'] ?? 'https://www.behance.net/mdjulfikerhasan' }}" target="_blank" class="social-link" title="Behance">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 24C5.373 24 0 18.627 0 12S5.373 0 12 0s12 5.373 12 12-5.373 12-12 12zm-3.558-5.302c.858 0 1.672-.144 2.412-.432.74-.288 1.368-.72 1.884-1.296.516-.576.924-1.26 1.224-2.052.3-.792.45-1.68.45-2.664 0-.984-.15-1.872-.45-2.664-.3-.792-.708-1.476-1.224-2.052-.516-.576-1.144-1.008-1.884-1.296-.74-.288-1.554-.432-2.412-.432H8.442v13.488h.001zm0-15.186c1.416 0 2.736.24 3.96.72 1.224.48 2.28 1.164 3.168 2.052.888.888 1.572 1.944 2.052 3.168.48 1.224.72 2.544.72 3.96s-.24 2.736-.72 3.96c-.48 1.224-1.164 2.28-2.052 3.168-.888.888-1.944 1.572-3.168 2.052-1.224.48-2.544.72-3.96.72H8.442V3.512h.001z"/>
                                <path d="M12.6 9.6c.6 0 1.08.24 1.44.72.36.48.54 1.08.54 1.8s-.18 1.32-.54 1.8c-.36.48-.84.72-1.44.72h-2.4V9.6h2.4z"/>
                            </svg>
                        </a>
                        <a href="{{ $settings['linkedin_url'] ?? 'https://www.linkedin.com/in/md-julfikar-hasan-282249215' }}" target="_blank" class="social-link" title="LinkedIn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="{{ $settings['dribbble_url'] ?? 'https://dribbble.com/hasan1912' }}" target="_blank" class="social-link" title="Dribbble">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0C5.374 0 0 5.373 0 12 0 18.627 5.374 24 12 24s12-5.373 12-12C24 5.373 18.626 0 12 0zm6.5 4.5c-.276 0-.5.224-.5.5s.224.5.5.5.5-.224.5-.5-.224-.5-.5-.5zm-3 1c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm-6.5 1c-.276 0-.5.224-.5.5s.224.5.5.5.5-.224.5-.5-.224-.5-.5-.5z"/>
                                <circle cx="12" cy="12" r="3"/>
                                <path d="M12 6c-3.314 0-6 2.686-6 6s2.686 6 6 6 6-2.686 6-6-2.686-6-6-6zm0 10c-2.209 0-4-1.791-4-4s1.791-4 4-4 4 1.791 4 4-1.791 4-4 4z"/>
                            </svg>
                        </a>
                        <a href="{{ $settings['github_url'] ?? 'https://github.com/Julfiker-NpM' }}" target="_blank" class="social-link" title="GitHub">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <form class="contact-form" action="{{ route('contact.store') }}" method="POST">
                @csrf
                @if(session('success'))
                    <div class="alert alert-success" style="background: #00ff88; color: #000; padding: 1rem; border-radius: 4px; margin-bottom: 1rem;">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                    <div class="alert alert-error" style="background: #ff4444; color: white; padding: 1rem; border-radius: 4px; margin-bottom: 1rem;">{{ session('error') }}</div>
                @endif
                @if($errors->any())
                    <div class="alert alert-error" style="background: #ff4444; color: white; padding: 1rem; border-radius: 4px; margin-bottom: 1rem;">
                        <ul style="margin: 0; padding-left: 1.5rem;">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required>
                <input type="email" name="email" placeholder="Your Email" value="{{ old('email') }}" required>
                <textarea name="message" placeholder="Your Message" rows="5" required>{{ old('message') }}</textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>
@endsection

@section('footer')
    <footer>
        <div class="footer-content">
            <p class="tagline">"Design isn't just about how it looks — it's about how it feels, how it works, and how it connects with people."</p>
            <p class="copyright">&copy; {{ date('Y') }} Md Julfikar Hasan. All rights reserved.</p>
        </div>
    </footer>
@endsection

@push('scripts')
    <script src="{{ asset('js/contact.js') }}"></script>
@endpush


