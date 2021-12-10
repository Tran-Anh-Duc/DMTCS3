
@extends("backend.layout.master")
@section("content")
<form action="{{route('products.create')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div style="margin-top:50px;margin-left: 200px ">
    <table  class="table table-dark" style="width: 700px;height: 500px">
        <tr>

            <td><input type="text" name="name" style="width: 700px" placeholder="name" class="alert alert-primary" role="alert">
                @error('name')
                <p class="text text-danger">{{$message}}</p>
                @enderror
            </td>
        </tr>
        <tr>

            <td><input type="number" name="price" style="width: 700px" placeholder="price" class="alert alert-primary" role="alert">
                @error('price')
                <p class="text text-danger">{{$message}}</p>
                @enderror
            </td>
        </tr>
        <tr>
            <td>
            <select style="margin-left: 15px;margin-bottom: 30px;width: 250px" class="custom-select"
                    name="category" >
                <option>Category</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            </td>
        </tr>
        <tr>
            <td><input type="file" name="image"></td>
        </tr>


    </table>

    </div>
    <div style="margin-left: 200px">
        <a href="{{route('products.list')}}" class="btn btn-primary">Back</a>
        <button class="btn btn-primary" type="submit">Add Product</button>
    </div>


</form>
@endsection
