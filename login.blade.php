<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Telecom - Staff Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="login-container">
        <!-- Lado Izquierdo - Branding -->
        <div class="left-section">
            <div class="brand-content">
                <div class="logo">
                    <img src="{{ asset('images/nepal-telecom-logo.png') }}" alt="Nepal Telecom Logo">
                </div>
                <h1 class="title">INTERCONNECT</h1>
                <p class="subtitle">Billing & Accounting</p>
            </div>
            <div class="copyright">
                © 2016, Nepal Doorsanchar Company Limited, All Rights Reserved.
            </div>
        </div>

        <!-- Lado Derecho - Formulario de Login -->
        <div class="right-section">
            <div class="login-form">
                <h2>STAFF LOG IN</h2>
                
                @if ($errors->any())
                    <div class="alert alert-error">
                        {{ $errors->first() }}
                    </div>
                @endif

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="form-control @error('email') is-invalid @enderror" 
                            value="{{ old('email') }}" 
                            required 
                            autofocus
                            placeholder="Enter your email"
                        >
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            required
                            placeholder="Enter your password"
                        >
                    </div>

                    <button type="submit" class="btn-login">
                        LOGIN <span class="arrow">➔</span>
                    </button>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forgot-password">
                            Forgot Password?
                        </a>
                    @endif
                </form>
            </div>
        </div>
    </div>
</body>
</html> 