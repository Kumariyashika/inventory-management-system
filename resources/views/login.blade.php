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

            <form action="#" method="POST">
                <div class="form-group">
                    <label class="form-label" for="role">Select Role</label>
                    <select class="form-control" id="role" name="role" required>
                        <option value="" disabled selected>Choose your role...</option>
                        <option value="admin">Admin</option>
                        <option value="warehouse">Warehouse</option>
                        <option value="account">Account</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label" for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@company.com" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
                </div>

                <!-- Temporarily using a simple link to simulate successful login and redirect to the dashboard -->
                <button type="button" class="login-btn" onclick="window.location.href='/admin/dashboard'">Sign In</button>
            </form>
        </div>
    </div>
</body>
</html>
