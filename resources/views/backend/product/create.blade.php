
@extends("backend.layout.master")
@section("content")
{{--<form action="{{route('products.create')}}" method="post" enctype="multipart/form-data">--}}
{{--    @csrf--}}
{{--    <div style="margin-top:50px;margin-left: 200px ">--}}
{{--    <table  class="table table-dark" style="width: 700px;height: 500px">--}}
{{--        <tr>--}}

{{--            <td><input type="text" name="name" style="width: 700px" placeholder="Name" class="alert alert-primary" role="alert">--}}
{{--                @error('name')--}}
{{--                <p class="text text-danger">{{$message}}</p>--}}
{{--                @enderror--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--        <tr>--}}

{{--            <td><input type="number" name="price" style="width: 700px" placeholder="Price" class="alert alert-primary" role="alert">--}}
{{--                @error('price')--}}
{{--                <p class="text text-danger">{{$message}}</p>--}}
{{--                @enderror--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>--}}
{{--            <select style="margin-left: 15px;margin-bottom: 30px;width: 250px" class="custom-select"--}}
{{--                    name="category" >--}}
{{--                <option>Category</option>--}}
{{--                @foreach($categories as $category)--}}
{{--                    <option value="{{$category->id}}">{{$category->name}}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td><input type="file" name="image"></td>--}}
{{--        </tr>--}}


{{--    </table>--}}

{{--    </div>--}}
{{--    <div style="margin-left: 200px">--}}
{{--        <a href="{{route('products.list')}}" class="btn btn-primary">Back</a>--}}
{{--        <button class="btn btn-primary" type="submit">Add Product</button>--}}
{{--    </div>--}}
{{--</form>--}}



{{--<div class="modal fade" id="productCreate" aria-hidden="true">--}}
<form action="{{route('products.create')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h1 style="color: #00b0ff">Add</h1>
                <div class="form-group">
                    <label for="name" class="col-sm-2">Name</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="nameApi" name="name" placeholder="Enter name">
                        @error('name')
                        <p class="text text-danger">{{$message}}</p>
                        @enderror
                        <span id="taskError" class="alert-message"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2">Price</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="priceApi" name="price" placeholder="Enter price">
                        @error('price')
                        <p class="text text-danger">{{$message}}</p>
                        @enderror
                        <span id="taskError" class="alert-message"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2">Category</label>
                    <div class="col-sm-12" id="categorytApi">
                        <select style="margin-left: 15px;margin-bottom: 30px;width: 250px" class="custom-select" id="categorytApi" name="category"
                                name="category" >
                            <option>Category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        <span id="taskError" class="alert-message"></span>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <a href="{{route('products.list')}}" class="btn btn-primary">Back</a>
                <button class="btn btn-primary" type="submit">Add Product</button>
            </div>
        </div>
    </div>
</form>
</div>
@endsection
