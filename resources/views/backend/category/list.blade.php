@extends("backend.layout.master")

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
    <a href="{{route('categories.showFormCreate')}}">Add New Category</a>
</div>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $key=>$category)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>
            <td><a type="button" href="{{route("categories.showFormEdit",$category->id)}}">Edit</a></td>
            <td><a type="button"  onclick="return confirm(' Are you sure ? ')" href="{{route('categories.destroy',$category->id)}}">Delete</a></td>
            <td><a type="button"  href="{{route('categories.showDetail',$category->id)}}">Detail</a>
        </tr>

    @endforeach
    </tbody>
</table>

</body>
</html>
