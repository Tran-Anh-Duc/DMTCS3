
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
                    <div class="card col-4 mt-5 mb-5" >
                        <div class="card-inner p-1" style="border-radius: 5px">
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

