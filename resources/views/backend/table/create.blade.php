@extends('backend.layout.master')
@section('content')
    <div class="card">
    <div class="container">
        <form action="" method="post">
            <h1 style="color: deepskyblue">Add Table</h1>
            @csrf
            <div>
                <input style="width:1000px;height: 100px;font-size: 30px" class="alert alert-primary" role="alert" type="text" name="name" value="{{old('name')}}" placeholder="name table">
            </div>
            <button class="btn btn-success" type="submit">Add</button>
            <a class="btn btn-success" type="button" href="{{route('tables.index')}}">back</a>
    </form>
    </div>
    </div>
@endsection
