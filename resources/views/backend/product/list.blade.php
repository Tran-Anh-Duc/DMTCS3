
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
    <div class="container row" style="margin-bottom: 20px">

            <h2 style="text-align:center;color: #00b0ff">Product</h2>
            <div class="row" >
                @foreach($products as $product)
                    <div class="card col-3">
                        <div class="card-inner">
                            <img style="width: 100%; height: 150px" src="{{ asset('image/'.$product->image)}}" alt="">
                            <p class="price">Price: {{number_format($product["price"])}}</p>
                            <p>Name: {{$product["name"]}}</p>
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

