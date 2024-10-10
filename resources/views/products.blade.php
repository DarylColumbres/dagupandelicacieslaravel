@extends('shop')

@section('content')

<div class="row">
    @foreach ($menu as $menus)
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
<<<<<<< HEAD
                <img src="{{ asset('images/' . $menus->image) }}" class="card-img-top mx-auto" style="width: 200px; height: 200px; margin-top: 20px;">
                <div class="card-body text-center">
                    <h2 class="card-title" style="font-size: 1.25rem; margin-bottom: 10px;">{{$menus->name}}</h2>
                    <p class="card-text" style="font-style: italic; margin-bottom: 15px;">{{$menus->description}}</p>
                    <div class="text-center mb-3">
                        <a href="{{ route('tuts', $menus->id) }}" class="btn btn-info shadow">View More</a>
                    </div>
                    <p class="card-text font-weight-bold" style="margin-top: 10px;">Total Cost: ₱{{$menus->price}}</p>
                </div>
=======
               <img src="{{asset('images')}}/{{ $menus->image}}" class="card-img-top">
            </div>
            <div class="card-body">
                <h2 class="card-title text-center" style="width: 200px;">{{$menus->name}}</h2>
                <p class="card-text text-center" style="font-style: italic;">{{$menus->description}}</p>
                <p class="card-text text-center" style="font-weight:bold;">Total cost: ₱
{{$menus->price}}</p>
>>>>>>> e28d8d047f8a90b1879ea904ca889f5a8e87ed55
            </div>
        </div>
    @endforeach
</div>

@endsection
