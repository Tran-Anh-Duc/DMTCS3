@extends('backend.layout.master')
@section('content')

{{--    <form method="post" enctype="multipart/form-data">--}}
{{--        @csrf--}}
{{--        <div style="margin-top:50px;margin-left: 200px ">--}}
{{--            <table class="table table-dark" style="width: 700px;height: 500px">--}}
{{--                <tr>--}}
{{--                    <td><input style="width: 700px" type="text" name="name" value="{{$product->name}}"--}}
{{--                               class="alert alert-primary" role="alert">--}}
{{--                        @error('name')--}}
{{--                        <p class="text text-danger">{{$message}}</p>--}}
{{--                        @enderror--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td><input style="width: 700px" type="number" name="price" value="{{$product->price}}"--}}
{{--                               class="alert alert-primary" role="alert">--}}
{{--                        @error('price')--}}
{{--                        <p class="text text-danger">{{$message}}</p>--}}
{{--                        @enderror--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td><input type="file" name="image"></td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <select style="margin-left: 15px;margin-bottom: 30px;width: 250px" class="custom-select"--}}
{{--                                name="category">--}}
{{--                            <option value="">Category</option>--}}
{{--                            @foreach($categories as $category)--}}
{{--                                <option value="{{$category->id}}">{{$category->name}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--        <div style="margin-left: 200px">--}}
{{--            <button class="btn btn-primary" type="submit">Add Product</button>--}}
{{--            <a href="{{route('products.list')}}" class="btn btn-primary">Back</a>--}}
{{--        </div>--}}
{{--    </form>--}}


{{--    <div class="modal fade" id="productEdit" aria-hidden="true">--}}
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h1 style="color: #00b0ff">Edit</h1>
                    <div class="form-group">
                        <label for="name" class="col-sm-2">Name</label>
                        <div class="col-sm-12">
                            <input  type="text" value="{{$product->name}}" class="form-control" id="nameApi" name="name"
                                   required="" class="alert alert-primary" role="alert">
                            @error('name')
                            <p class="text text-danger">{{$message}}</p>
                            @enderror
                            <span id="taskError" class="alert-message"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2">Price</label>
                        <div class="col-sm-12">
                            <input type="number" value="{{$product->price}}"  role="alert" class="form-control" id="priceApi" name="price"
                                   required="">
                            @error('price')
                            <p class="text text-danger">{{$message}}</p>
                            @enderror
                            <span id="taskError" class="alert-message"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2">Image</label>
                        <div class="col-sm-12">
                            <input type="file" id="imageApi" name="image"
                                   required="">
                            <span id="taskError" class="alert-message"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2">Category</label>
                        <div class="col-sm-12" id="categorytApi">
                            <select type="text" class="form-control" id="categorytApi" name="category" style="margin-left: 15px;margin-bottom: 30px;width: 250px" >
                                <option value="">Category</option>
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
    </div>
@endsection

