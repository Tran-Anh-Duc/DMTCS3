<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
<form action="" method="post">
    <h1>Add</h1>
    @csrf
    <div>
        <label for="name">Name
            <input type="text" name="name" value="{{old('name')}}">
        </label>
    </div>
    <button type="submit">Add</button>
    <a type="button" href="{{route('tables.index')}}">back</a>

</form>
</body>
</html>
