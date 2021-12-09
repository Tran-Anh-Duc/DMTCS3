@extends("backend.layout.master")

@extends("backend.layout.master")
@section('content')
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
@endsection

