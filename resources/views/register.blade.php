<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('cssfile/register.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <div class="login-container">
        <div class="welcome-back">
            <img src="{{ asset('images/DAGUPAN.png') }}" alt="Logo" class="logo">
            <p>To keep connected with us please login with your personal info</p>
            <a class="sign-in-btn" href="{{ route('/') }}">Sign In</a>
        </div>
        <div class="form-box">
            @if(Session::has('success'))
            <div class="alert alert-success text-center" role="alert">
                {{ Session::get('success') }}
            </div>
            @endif
            @if(Session::has('error'))
            <div class="alert alert-danger text-center" role="alert">
                {{ Session::get('error') }}
            </div>
            @endif
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <h2>Create Account</h2>


                <div class="inputbox">
                    <label for="name">Name</label>
                    <input type="text" name="name" required autocomplete="off">
                </div>


                <div class="inputbox">
                    <label for="email">Email</label>
                    <input type="email" name="email" required autocomplete="off">
                </div>


                <div class="inputbox">
                    <label for="password">Password</label>
                    <input type="password" name="password" required>
                </div>


                <div class="inputbox">
                    <label for="confirmpassword">Confirm Password</label>
                    <input type="password" name="confirmpassword" required>
                </div>

                <button class="button">Register</button>

                <div class="register">
                    <p>Already have an account? <a href="{{ route('/') }}">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
