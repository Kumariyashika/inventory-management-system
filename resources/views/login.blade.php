<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Inventory Manager</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="login-logo">
                    <img src="{{ asset('img/logo_ims.jfif') }}" alt="IMS Logo" style="max-height: 80px; width: auto; object-fit: contain; border-radius: 10px;">
                </div>
                <p class="login-subtitle">Welcome back! Please login to your account.</p>
            </div>

            <form action="{{ url('/login') }}" method="POST">
                @csrf
                
                @if ($errors->any())
                    <div style="background: #fee2e2; color: #b91c1c; padding: 12px; border-radius: 6px; margin-bottom: 16px;">
                        <ul style="margin: 0; padding-left: 20px; font-size: 0.85rem;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                    <label class="form-label" for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="name@company.com" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
                </div>

                <button type="submit" class="login-btn">Sign In</button>
            </form>
        </div>
    </div>
</body>
</html>
