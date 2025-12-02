<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #1a1a1a; display: flex; justify-content: center; align-items: center; min-height: 100vh; }
        .login-container { background: #2a2a2a; padding: 3rem; border-radius: 8px; width: 400px; }
        h1 { color: #00ff88; margin-bottom: 2rem; text-align: center; }
        form { }
        input { width: 100%; padding: 0.75rem; margin: 0.5rem 0; border: 1px solid #444; border-radius: 4px; background: #1a1a1a; color: white; }
        button { width: 100%; padding: 0.75rem; margin-top: 1rem; background: #00ff88; color: #000; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; }
        button:hover { background: #00cc6a; }
        .error { color: #ff4444; margin-top: 0.5rem; }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Admin Login</h1>
        <form action="{{ url('/admin/login') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>


