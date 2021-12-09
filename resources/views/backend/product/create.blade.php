@extends("backend.layout.master")
@section("content")

<form action="{{route('products.create')}}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" name="name">
                @error('name')
                <p class="text text-danger">{{$message}}</p>
                @enderror
            </td>
        </tr>
        <tr>
            <th>Price</th>
            <td><input type="number" name="price">
                @error('price')
                <p class="text text-danger">{{$message}}</p>
                @enderror
            </td>
        </tr>
        <tr>
            <th>Image</th>
            <td><input type="file" name="image"></td>
        </tr>
        <select style="margin-left: 15px;margin-bottom: 30px;width: 250px" class="custom-select"
                name="category">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select><br>
        <tr>
            <td>
                <a href="{{route('products.list')}}">Back</a>
                <button type="submit">Add Product</button>
            </td>
        </tr>
    </table>
</form>
@endsection

