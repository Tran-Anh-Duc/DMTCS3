@extends("backend.layout.master")
@section("content")

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
</head>
<body>
<div>
    <a href="{{route('tables.showFormCreate')}}">Add New Category</a>
</div>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tables as $key=>$table)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$table->name}}</td>
            <td><a type="button" href="{{route("tables.showFormEdit",$table->id)}}">Edit</a></td>
            <td><a type="button" onclick="return confirm(' Are you sure ? ')" href="{{route('tables.destroy',$table->id)}}">Delete</a></td>
        </tr>

    @endforeach
    </tbody>
</table>

</body>
</html>
@endsection
