

@extends("backend.layout.master")
@section('content')
{{--<form action="" method="post">--}}

{{--    @csrf--}}
{{--    <div>--}}
{{--            <input style="width: 500px" class="alert alert-primary" role="alert" type="text" name="name" value="{{$category->name}}">--}}
{{--            @error('name')--}}
{{--            <p class="text text-danger">{{$message}}</p>--}}
{{--            @enderror--}}
{{--    </div>--}}
{{--    <div>--}}
{{--            <input style="width: 500px" class="alert alert-primary" role="alert" type="text" name="description" value="{{$category->description}}">--}}
{{--            @error('description')--}}
{{--            <p class="text text-danger">{{$message}}</p>--}}
{{--            @enderror--}}
{{--    </div>--}}

{{--    <button class="btn btn-success" type="submit">Change</button>--}}
{{--    <a  class="btn btn-success" type="button" href="{{route('categories.index')}}">Back</a>--}}
{{--</form>--}}



{{--<div class="modal fade" id="categoryCreate" aria-hidden="true">--}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h1 style="color: #00b0ff">Edit</h1>
                <div class="form-group">
                    <label for="name" class="col-sm-2">Name</label>
                    <div class="col-sm-12">
                        <input style="width: 400px" class="form-control" role="alert" type="text" name="name" value="{{$category->name}}">
                        @error('name')
                        <p class="text text-danger">{{$message}}</p>
                        @enderror
                        <span id="taskError" class="alert-message"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2">Description</label>
                    <div class="col-sm-12">
                        <input style="width: 400px" class="form-control" role="alert" type="text" name="description" value="{{$category->description}}">
                        @error('description')
                        <p class="text text-danger">{{$message}}</p>
                        @enderror
                        <span id="taskError" class="alert-message"></span>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <a  class="btn btn-success" type="button" href="{{route('categories.index')}}">Back</a>
                <button class="btn btn-success" type="submit">Change</button>
            </div>

        </div>
    </div>
</div>
@endsection

