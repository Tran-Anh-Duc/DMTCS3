
@extends('backend.layout.master')
@section('content')
<form method="post" enctype="multipart/form-data">
    @csrf
    <div style="margin-top:50px;margin-left: 200px ">
    <table class="table table-dark" style="width: 700px;height: 500px">
        <tr>

            <td><input style="width: 700px" type="text" name="name" value="{{$product->name}}" class="alert alert-primary" role="alert" >
                @error('name')
                <p class="text text-danger">{{$message}}</p>
                @enderror
            </td>
        </tr>
        <tr>

            <td><input style="width: 700px" type="number" name="price" value="{{$product->price}}" class="alert alert-primary" role="alert">
                @error('price')
                <p class="text text-danger">{{$message}}</p>
                @enderror
            </td>
        </tr>
        <tr>

            <td><input type="file" name="image"></td>
        </tr>
                    <tr>
                        <td>
                            <select style="margin-left: 15px;margin-bottom: 30px;width: 250px" class="custom-select"
                                    name="category" >
                                <option value="">Category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>

    </table>
    </div>
    <div style="margin-left: 200px">
        <a href="{{route('products.list')}}">
            <button class="btn btn-primary">Back</button></a>
        <button class="btn btn-primary" type="submit">Add Product</button>
    </div>
</form>



@endsection

