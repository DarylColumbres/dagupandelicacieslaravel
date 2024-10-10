<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin Dashboard</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .table {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            vertical-align: middle;
        }
        .image-container img {
            max-height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body class="p-5">
    <div class="container">
<<<<<<< HEAD
        <h1 class="text-center mb-4">RECIPES ADMIN PANEL</h1>
=======
        <h1 class="text-center mb-3">MENU ADMIN</h1>
>>>>>>> e28d8d047f8a90b1879ea904ca889f5a8e87ed55
        @if (Session::has('success'))
        <div class="alert alert-success text-center" role="alert">
            {{ Session::get('success') }}
        </div>
        @endif
<<<<<<< HEAD

        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('/') }}" class="btn btn-danger shadow">Logout</a>
            <a href="{{ route('create') }}" class="btn btn-primary shadow">Add New Product</a>
=======
        <div class="d-flex justify-content-end mb-3">
            <a href="{{route('create')}}" class="btn btn-primary shadow">Add New Product</a>
            <a href="{{route('login')}}" class="btn btn-primary shadow">Log out</a>
>>>>>>> e28d8d047f8a90b1879ea904ca889f5a8e87ed55
        </div>

        <table class="table table-bordered">
<<<<<<< HEAD
            <thead class="table-light text-center">
=======
            <thead class="text-center">     
>>>>>>> e28d8d047f8a90b1879ea904ca889f5a8e87ed55
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Description</th>
<<<<<<< HEAD
                    <th>Price</th>
                    <th>Ingredients</th>
                    <th>How to Cook</th>
=======
                    <th>Total cost</th>
>>>>>>> e28d8d047f8a90b1879ea904ca889f5a8e87ed55
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @forelse($menu as $menus)
                <tr>
                    <td>{{ $menus->id }}</td>
                    <td style="font-size: 18px;">{{ $menus->name }}</td>
                    <td>
                        <div class="image-container">
                            <img src="{{ asset('images') }}/{{ $menus->image }}" class="img-fluid" alt="{{ $menus->name }}">
                        </div>
                    </td>
                    <td style="max-width: 200px;">{{ $menus->description }}</td>
                    <td>₱{{ number_format($menus->price, 2) }}</td>
                    <td style="max-width: 200px;">{{ $menus->ingredients }}</td>
                    <td style="max-width: 200px;">{{ $menus->howtocook }}</td>
                    <td class="text-center">
                        <form action="{{ route('destroy', $menus->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('edit', $menus->id) }}" class="btn btn-success shadow">Edit</a>
                            <a href="{{ route('recipe', $menus->id) }}" class="btn btn-primary shadow">Show</a>
                            <button type="submit" class="btn btn-danger shadow">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="text-center">No Menu Added</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-ikWPhb9/3udT+8K27glDq3NTj8mV+Pb6pGHuYgakLhLlN1bo14Ahi4tK8Z8R2mM5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-czZI1WZ9x0UIkI4l3rB7p7T6c1ujOjfi2p+IcXk1UeojxPm05aFmPtW06H0yD4or" crossorigin="anonymous"></script>
</body>
</html>
