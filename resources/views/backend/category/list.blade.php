@extends("backend.layout.master")
@section('content')

<table border="1px" class="table table-dark" style="margin-top: 50px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $key=>$category)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>
            <td><a class="btn btn-primary" type="button" href="{{route("categories.showFormEdit",$category->id)}}">Edit</a></td>
            <td><a class="btn btn-primary" type="button"  onclick="return confirm(' Are you sure ? ')" href="{{route('categories.destroy',$category->id)}}">Delete</a></td>
            <td><a class="btn btn-primary" type="button"  href="{{route('categories.showDetail',$category->id)}}">Detail</a>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
