 <!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dagupan Delicacy Popular Foods</title>
  <link rel="stylesheet" href="{{ asset('cssfile/shop.css') }}">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/DAGUPAN.png') }}" alt="Menu Website Logo" width="35px" height="auto" style="border-radius: 50px;">
            <span class="ml-2" style="font-size: 1.0rem; color: #ffffff;">Dagupan Delicacies</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" >
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="font-size: 1.0rem;">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}" style="font-size: 1.0rem;">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('/') }}" style="font-size: 1.0rem;">Logout</a>
                </li>
            </ul>
        </div>
    </nav>




<div class="container mt-4">
  <h2 class="mb-3 text-center">Dagupan Delicacies Popular Foods</h2>
  <p class="text-center mb-5">Browse through our mouthwatering dishes!</p>

  @if (Session::has('success'))
  <div class="alert alert-success text-center" role="alert">
      {{ Session::get('success') }}
  </div>
  @endif
  @yield('content')
</div>


<footer>
  <p>&copy; 2024 Dagupan Delicacies. All Rights Reserved.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
=======
  <title>Recipe Website</title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>

  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    Menu Website
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('about')}}">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('login')}}">Log out</a>
      </li>
    </ul>
  </div>
</nav>

      <div class="container mt-4">
          <h2 class="mb-3 text-center">Phinma Popular Foods</h2>
          <p class="text-center mb-5">Browse through our mouthwatering dishes! In Dagupan</p>
          @if (Session::has('success'))
          <div class="alert alert-success text-center" role="alert">
              {{ Session::get('success') }}
          </div>
          @endif
          @yield('content')
      </div>


      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
  </html>
>>>>>>> e28d8d047f8a90b1879ea904ca889f5a8e87ed55
