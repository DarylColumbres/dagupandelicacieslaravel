<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('cssfile/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<<<<<<< HEAD
<body img src="{{ asset('images/belen1.jpg') }}" alt="Logo">
    <div class="login-container">
        <div class="welcome-back">
            <img src="{{ asset('images/DAGUPAN.png') }}" alt="Logo" class="logo">
            <p>Enter your personal details and start your journey with us</p>
            <a class="sign-up-btn" href="{{ route('register') }}">Sign Up</a>
        </div>
        <div class="form-box">
            @if(Session::has('error'))
            <div class="alert alert-danger text-center" role="alert">
                {{ Session::get('error') }}
=======
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h1 class="card-title">Login</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            @if(Session::has('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ Session::get('error') }}
                                </div>
                            @endif
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="username@email.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                            <div class="text-center">
                                <a href="{{ route('register') }}" class="text-decoration-none">Register Now</a>
                            </div>
                            <div class="text-center">
                                <a href="{{ route('admin') }}" class="text-decoration-none">Log in admin</a>
                            </div>
                        </form>
                    </div>
                </div>
>>>>>>> e28d8d047f8a90b1879ea904ca889f5a8e87ed55
            </div>
            @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <h2>Login</h2>


                <div class="inputbox">
                    <label for="email">Email</label>

                    <input type="email" name="email" id="email" required autocomplete="off">
                </div>

                <div class="inputbox">
                    <label for="password">Password</label>

                    <input type="password" name="password" required>
                </div>

                <button class="button">Login</button>

                <div class="register">
                    <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
                </div>
            </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
