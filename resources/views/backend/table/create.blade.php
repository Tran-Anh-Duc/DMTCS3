@extends('backend.layout.master')
@section('content')
    <div class="container">
        <form action="" method="post">
            <h1 style="color: deepskyblue">Add</h1>
            @csrf
            <div>
                <input class="alert alert-primary" role="alert" type="text" name="name" value="{{old('name')}}" placeholder="name">
            </div>
            <button class="btn btn-success" type="submit">Add</button>
            <a class="btn btn-success" type="button" href="{{route('tables.index')}}">back</a>
    </form>
    </div>
@endsection
