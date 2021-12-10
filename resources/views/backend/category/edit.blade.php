

@extends("backend.layout.master")
@section('content')
<form action="" method="post">
    <h1 style="color: #00b0ff">Edit</h1>
    @csrf
    <div>
            <input style="width: 500px" class="alert alert-primary" role="alert" type="text" name="name" value="{{$category->name}}">
            @error('name')
            <p class="text text-danger">{{$message}}</p>
            @enderror
    </div>
    <div>
            <input style="width: 500px" class="alert alert-primary" role="alert" type="text" name="description" value="{{$category->description}}">
            @error('description')
            <p class="text text-danger">{{$message}}</p>
            @enderror
    </div>

    <button class="btn btn-success" type="submit">Change</button>
    <a  class="btn btn-success" type="button" href="{{route('categories.index')}}">Back</a>


</form>
@endsection

