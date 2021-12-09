@extends("backend.layout.master")
@section("content")
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <table border="1px">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th colspan="3">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th colspan="3">Action</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($products as $key => $product)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$product["name"]}}</td>
                        <td>{{$product["price"]}}</td>
                        <td><img style="width: 300px; height: 150px" src="{{ asset('image/'.$product->image)}}" alt=""></td>
                        <td>{{$product->category->name}}</td>
                        <td><a class="btn btn-warning" href="{{route('products.detail', $product->id)}}">Detail</a></td>
                        <td><a class="btn btn-success" href="{{route('edit.form',$product->id)}}">Update</a></td>
                        <td><a class="btn btn-danger" onclick="return confirm('Are you sure ??')"
                               href="{{route('products.delete',$product->id)}}">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
{{--<collum 2 >--}}
        <div class="col-lg-4">
            <table border="1px">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th colspan="3">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th colspan="3">Action</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($products as $key => $product)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$product["name"]}}</td>
                        <td>{{$product["price"]}}</td>
                        <td><img style="width: 300px; height: 150px" src="{{ asset('image/'.$product->image)}}" alt=""></td>
                        <td>{{$product->category->name}}</td>
                        <td><a class="btn btn-warning" href="{{route('products.detail', $product->id)}}">Detail</a></td>
                        <td><a class="btn btn-success" href="{{route('edit.form',$product->id)}}">Update</a></td>
                        <td><a class="btn btn-danger" onclick="return confirm('Are you sure ??')"
                               href="{{route('products.delete',$product->id)}}">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
@endsection
