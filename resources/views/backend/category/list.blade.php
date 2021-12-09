@extends("backend.layout.master")
@section('content')
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
@endsection
