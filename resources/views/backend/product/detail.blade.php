@extends('backend.layout.master')
@section('content')
    <div class="row" style="margin-left: 300px;margin-top: 50px;">
        <div class="card" style="width:100%;">
            <div>
                <img style="width: 300px; height: 150px" src="{{ asset('image/'.$product->image)}}" alt="">
            </div>
            <div class="card-body">
                <h5 class="card-title">Product Drink </h5>
                <p class="card-text">Name: {{$product->name}}</p>
                <p class="card-text">Price: {{$product->price}}</p>
            </div>
            <a href="{{route('products.list')}}"><button class="btn btn-primary">Back</button></a>

        </div>
    </div>

@endsection
