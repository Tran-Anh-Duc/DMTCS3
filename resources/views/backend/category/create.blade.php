@extends("backend.layout.master")
@section('content')
<form action="" method="post">
    <h1 style="color: #00b0ff">Add</h1>
    @csrf
    <div>
            <input style="width: 500px" placeholder="name" class="alert alert-primary" role="alert" type="text" name="name" value="{{old('name')}}">
            @error('name')
            <p class="text text-danger">{{$message}}</p>
            @enderror
    </div>

    <div>
            <input style="width: 500px" placeholder="description" class="alert alert-primary" role="alert" type="text" name="description" value="{{old('description')}}">
            @error('description')
            <p class="text text-danger">{{$message}}</p>
            @enderror

    </div>
    <button class="btn btn-success" type="submit">Add</button>
    <a class="btn btn-success" type="button" href="{{route('categories.index')}}">back</a>

</form>
@endsection
