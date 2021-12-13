@extends('backend.layout.master')
@section('content')

    <form method="post" enctype="multipart/form-data">
        @csrf
        <div style="margin-top:50px;margin-left: 200px ">


            <table class="table table-dark" style="width: 700px;height: 500px">
                <div class="col-3">
                    <tr>
                        <td><input type="file" name="image"></td>
                    </tr>
                    <tr>

                        <td><input style="width: 700px" type="text" name="name" value="{{$product->name}}"
                                   class="alert alert-primary" role="alert">
                            @error('name')
                            <p class="text text-danger">{{$message}}</p>
                            @enderror
                        </td>
                    </tr>

                    <tr>

                        <td><input style="width: 700px" type="number" name="price" value="{{$product->price}}"
                                   class="alert alert-primary" role="alert">
                            @error('price')
                            <p class="text text-danger">{{$message}}</p>
                            @enderror
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <select style="margin-left: 15px;margin-bottom: 30px;width: 250px" class="custom-select"
                                    name="category">
                                <option value="">Category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                </div>
            </table>
        </div>

        <div style="margin-left: 200px">
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{route('products.list')}}" class="btn btn-primary">Back</a>
            <button class="btn btn-outline-success" type="submit">Update</button>
        </div>
    </form>

@endsection

