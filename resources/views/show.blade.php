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
        <label>Name</label>
        <input type="text" name="name" class="form-control" readonly value="{{$menu->name}}">

        <label>Image</label>
        <input type="text" name="image" class="form-control" readonly value="{{$menu->image}}">

        <label>Description</label>
        <input type="text" name="description" class="form-control" readonly value="{{$menu->description}}">

        <label>Total cost</label>
        <input type="number" name="price" class="form-control" readonly value="{{$menu->price}}">

        <label>Ingredients</label>
        <input type="text" name="ingredients" class="form-control" readonly value="{{$menu->ingredients}}">

        <label>How to cook</label>
        <input type="text" name="howtocook" class="form-control" readonly value="{{$menu->howtocook}}">
    
        <a href="/dashboard" class="btn btn-primary mt-3 shadow">Back</a>
    </div>
</form>
    
</body>
</html>