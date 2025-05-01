<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('img/tung.jpg'); 
            background-size: cover;
            background-position: center;
            height: 100vh;
            font-family: 'Nunito', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-attachment: fixed;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.8); 
            border-radius: 15px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 100%;
            max-width: 420px;
            backdrop-filter: blur(10px); 
            transition: all 0.3s ease;
        }

        .login-container:hover {
            box-shadow: 0 6px 40px rgba(0, 0, 0, 0.25);
        }

        .login-container h2 {
            text-align: center;
            font-weight: 700;
            margin-bottom: 30px;
            color: #333;
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            padding: 15px;
            font-size: 16px;
            transition: border 0.3s ease;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 12px 20px;
            width: 100%;
            border-radius: 8px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .form-check-label {
            font-size: 14px;
            color: #666;
        }

        .btn-link {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-link:hover {
            text-decoration: underline;
        }

        .text-center a {
            display: block;
            text-align: center;
            color: #007bff;
            margin-top: 20px;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo-container img {
            width: 80px;
        }
    </style>
    <title>Login Admin</title>
</head>

<body>
    <div class="login-container">
        <div class="logo-container">
            <img src="{{ asset('img/logo.png') }}" alt="Logo">
        </div>
        <h2>Login to Continue </h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <!-- Password -->
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="current-password" placeholder="Password">

            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <!-- Remember me -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    Remember Me
                </label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Login</button>

            @if (Route::has('password.request'))
            <div class="text-center">
                <a href="{{ route('password.request') }}">Forgot Your Password?</a>
            </div>
            @endif

          
            <div class="text-center">
                <a href="{{ route('register') }}">Register?</a>
            </div>
        


        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
