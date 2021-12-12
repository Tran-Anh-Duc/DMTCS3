
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
        <<form class="form-inline my-2 my-lg-0" action="{{ route('products.search') }}" method="GET">
            <input style="width: 800px" class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            <a class="btn btn-outline-success" href="{{route('products.list')}}" type="button">Back</a>
        </form>
        <div class="row" >
            @if($products->isNotEmpty())
            @foreach($products as $product)
                <div class="card col-4 mt-5 mb-5">
                    <div class="card-inner " >
                        <img style="width: 100%" src="{{asset("image/$product->image")}}"  alt="">
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
            @else
            <div>
                <h2>No products found</h2>
            </div>
            @endif
        </div>
    </div>

@endsection


