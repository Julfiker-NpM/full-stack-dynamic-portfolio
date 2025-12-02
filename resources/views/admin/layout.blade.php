<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif; background: #0a0a0a; color: #fff; }
        .admin-header { background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%); color: white; padding: 1.5rem 2rem; display: flex; justify-content: space-between; align-items: center; border-bottom: 2px solid #00ff88; }
        .admin-header h1 { font-size: 1.5rem; font-weight: 600; }
        .admin-nav { background: #1a1a1a; padding: 0.75rem 2rem; border-bottom: 1px solid #333; }
        .admin-nav a { color: #aaa; text-decoration: none; margin-right: 2rem; padding: 0.5rem 1rem; border-radius: 6px; transition: all 0.3s ease; }
        .admin-nav a:hover { color: #00ff88; background: rgba(0, 255, 136, 0.1); }
        .admin-container { padding: 0; background: #0a0a0a; min-height: calc(100vh - 140px); }
        .admin-sidebar { width: 250px; background: linear-gradient(180deg, #1a1a1a 0%, #2a2a2a 100%); min-height: calc(100vh - 140px); float: left; padding: 1.5rem 0; border-right: 1px solid #333; }
        .admin-content { margin-left: 250px; background: #0a0a0a; min-height: calc(100vh - 140px); }
        .admin-sidebar a { display: block; color: #aaa; padding: 1rem 1.5rem; text-decoration: none; border-left: 3px solid transparent; transition: all 0.3s ease; }
        .admin-sidebar a:hover { background: rgba(0, 255, 136, 0.1); color: #00ff88; border-left-color: #00ff88; }
        table { width: 100%; border-collapse: collapse; background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%); border: 1px solid #333; border-radius: 12px; overflow: hidden; }
        th, td { padding: 1rem; text-align: left; border-bottom: 1px solid #333; }
        th { background: #1a1a1a; color: #00ff88; font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px; }
        td { color: #aaa; }
        tr:hover { background: rgba(0, 255, 136, 0.05); }
        .btn, button.btn, a.btn { 
            padding: 0.6rem 1.2rem; 
            border: none; 
            cursor: pointer; 
            text-decoration: none; 
            display: inline-block; 
            border-radius: 6px; 
            font-weight: 500; 
            font-size: 0.9rem;
            transition: all 0.3s ease;
            font-family: inherit;
            line-height: 1.5;
            vertical-align: middle;
            margin: 0;
        }
        .btn-primary, button.btn-primary, a.btn-primary { 
            background: #00ff88; 
            color: #000; 
            border: none;
        }
        .btn-primary:hover, button.btn-primary:hover, a.btn-primary:hover { 
            background: #00cc6a; 
            transform: translateY(-2px); 
            box-shadow: 0 4px 12px rgba(0, 255, 136, 0.3);
            color: #000;
        }
        .btn-danger, button.btn-danger { 
            background: #ff4444; 
            color: white; 
            border: none;
        }
        .btn-danger:hover, button.btn-danger:hover { 
            background: #cc0000; 
            transform: translateY(-2px); 
            box-shadow: 0 4px 12px rgba(255, 68, 68, 0.3);
            color: white;
        }
        .btn-success, button.btn-success { 
            background: #44ff44; 
            color: #000;
            border: none;
        }
        button { 
            font-family: inherit;
            outline: none;
        }
        button:focus {
            outline: 2px solid #00ff88;
            outline-offset: 2px;
        }
        a.btn { 
            text-decoration: none;
        }
        .btn + .btn, button.btn + button.btn {
            margin-left: 0.5rem;
        }
        form.inline-form {
            display: inline-block;
            margin: 0;
        }
        form.inline-form button {
            margin: 0;
        }
        td .btn {
            margin-right: 0.5rem;
        }
        td form {
            display: inline-block;
            margin: 0;
            vertical-align: middle;
        }
        td form button {
            margin: 0;
        }
        form { background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%); padding: 2rem; border-radius: 12px; border: 1px solid #333; }
        input, textarea, select { width: 100%; padding: 0.75rem; margin: 0.5rem 0; border: 1px solid #333; border-radius: 6px; background: #0a0a0a; color: #fff; }
        input:focus, textarea:focus, select:focus { outline: none; border-color: #00ff88; box-shadow: 0 0 0 3px rgba(0, 255, 136, 0.1); }
        .alert { padding: 1rem 1.5rem; margin: 1rem 0; border-radius: 8px; border-left: 4px solid; }
        .alert-success { background: rgba(0, 255, 136, 0.1); color: #00ff88; border-left-color: #00ff88; }
        .alert-error { background: rgba(255, 68, 68, 0.1); color: #ff4444; border-left-color: #ff4444; }
        h2 { color: #fff; font-size: 1.8rem; margin-bottom: 1.5rem; font-weight: 600; }
    </style>
    @stack('styles')
</head>
<body>
    <div class="admin-header">
        <h1>Admin Panel</h1>
        <div>
            <span>{{ auth()->user()->name }}</span>
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-danger" style="margin-left: 1rem;">Logout</button>
            </form>
        </div>
    </div>
    <div class="admin-nav">
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.projects.index') }}">Projects</a>
        <a href="{{ route('admin.skills.index') }}">Skills</a>
        <a href="{{ route('admin.experiences.index') }}">Experiences</a>
        <a href="{{ route('admin.messages.index') }}">Messages</a>
        <a href="{{ route('admin.settings.index') }}">Settings</a>
    </div>
    <div class="admin-container">
        <div class="admin-sidebar">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a href="{{ route('admin.projects.index') }}">Projects</a>
            <a href="{{ route('admin.skills.index') }}">Skills</a>
            <a href="{{ route('admin.experiences.index') }}">Experiences</a>
            <a href="{{ route('admin.messages.index') }}">Messages</a>
            <a href="{{ route('admin.settings.index') }}">Settings</a>
        </div>
        <div class="admin-content">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if($errors->any())
                <div class="alert alert-error">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @yield('content')
        </div>
        <div style="clear: both;"></div>
    </div>
    @stack('scripts')
</body>
</html>


