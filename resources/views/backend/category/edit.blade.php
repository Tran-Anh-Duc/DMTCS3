@extends("backend.layout.master")

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
<form action="" method="post">
    <h1>Edit</h1>
    @csrf
    <div>
        <label for="name">Name
            <input type="text" name="name" value="{{$category->name}}">
            @error('name')
            <p class="text text-danger">{{$message}}</p>
            @enderror
        </label>
    </div>

    <div>
        <label for="description">Description
            <input type="text" name="description" value="{{$category->description}}">
            @error('description')
            <p class="text text-danger">{{$message}}</p>
            @enderror
        </label>
    </div>

    <button type="submit">Change</button>
    <a  type="button" href="{{route('categories.index')}}">Back</a>


</form>
</body>
</html>

