<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="p-5">
    <div class="form-group">
        <h1>{{$menu->name}} Ingredients and Cooking Method:</h1>
        <br>
        <img src="{{asset('images')}}/{{ $menu->image}}">
        <br>
        <h1>Ingredients</h1>
        <p>{{$menu->ingredients}}</p>


        <h1>Cooking Method</h1>
        <p>{{$menu->howtocook}}</p>
    
        <a href="/dashboard" class="btn btn-primary mt-3 shadow">Back</a>
    </div>
</form>
    
</body>
</html>