{{--<<<<<<< HEAD--}}
{{--=======--}}
{{--@extends("backend.layout.master")--}}
{{--@section("content")--}}
{{--    <a href="{{route('products.create')}}">--}}
{{--        <button>Create Product</button>--}}
{{--    </a>--}}
{{--    <table border="1px">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>ID</th>--}}
{{--            <th>Name</th>--}}
{{--            <th>Price</th>--}}
{{--            <th>Image</th>--}}
{{--            <th>Category</th>--}}
{{--            <th colspan="3">Action</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tfoot>--}}
{{--        <tr>--}}
{{--            <th>ID</th>--}}
{{--            <th>Name</th>--}}
{{--            <th>Price</th>--}}
{{--            <th>Image</th>--}}
{{--            <th>Category</th>--}}
{{--            <th colspan="3">Action</th>--}}
{{--        </tr>--}}
{{--        </tfoot>--}}
{{--        <tbody>--}}
{{--        @foreach($products as $key => $product)--}}
{{--            <tr>--}}
{{--                <td>{{$key+1}}</td>--}}
{{--                <td>{{$product["name"]}}</td>--}}
{{--                <td>{{$product["price"]}}</td>--}}
{{--                <td><img style="width: 300px; height: 150px" src="{{ asset('image/'.$product->image)}}" alt=""></td>--}}
{{--                <td>{{$product->category->name}}</td>--}}
{{--                <td><a class="btn btn-warning" href="{{route('products.detail', $product->id)}}">Detail</a></td>--}}
{{--                <td><a class="btn btn-success" href="{{route('edit.form',$product->id)}}">Update</a></td>--}}
{{--                <td><a class="btn btn-danger" onclick="return confirm('Are you sure ??')"--}}
{{--                       href="{{route('products.delete',$product->id)}}">Delete</a></td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--@endsection--}}

{{-->>>>>>> eb7b66e294fe980cd2c9ddbb6d3b239508fb5d27--}}

@extends('backend.layout.master')
@section('content')
    <style>
        .card{
            padding: 5px;
            box-sizing: border-box;
            background-color: rgba(255, 255, 255, 0);
            border: none;
        }
        .card-inner {
            background-color: rgba(255, 255, 255, 255);
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            text-align: center;
            font-family: arial;
        }

        .price {
            color: grey;
            font-size: 22px;
        }

        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .card button:hover {
            opacity: 0.7;
        }
    </style>
    <div class="container">
            <div class="row" >
                @foreach($products as $product)
                    <div class="card col-4 mt-5 mb-5">
                        <div class="card-inner " >
                            <img style="width: 100%" src="{{asset("image/$product->image")}}" >
                            <h4 class="card-title">{{$product["name"]}}</h4>
                            <h4 class="card-text">{{number_format($product["price"]). "₫"}}</h4>
                            <a style="width: 20px" type="button" class="btn btn-warning" href="{{route('products.detail', $product->id)}}">
                                <i class="fas fa-info"></i>

                            </a>
                            <a type="button" class="btn btn-success" href="{{route('edit.form',$product->id)}}">
                                Update
                            </a>
                            <a type="button" class="btn btn-danger" onclick="return confirm('Are you sure ??')"
                               href="{{route('products.delete',$product->id)}}">
                                Delete
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

@endsection

