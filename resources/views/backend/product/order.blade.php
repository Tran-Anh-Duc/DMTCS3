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
        <div class="col-lg-8 ">
           <a class="btn btn-success" href="{{route("tables.index")}}">Back</a>
            @foreach($categories as $key => $category)
            <a href="?category={{$category->id}}" class="btn btn-success">{{$category->name}}</a>
            @endforeach
            {{-- card--}}
            <div class="container">
                <div class="row">
                    @foreach($products as $key => $product)
                        @if(!isset($_GET["category"])  ||  $product->category_id == $_GET["category"])
                        <div class="col-6 mt-5 ">
                            <div class="card">
                                <div class="card-inner ">
                                    <a href="{{ route("tables.addToOrder",[$product->id,$detail->id]) }}">
                                    <img style="width: 100%" src="{{asset("image/$product->image")}}">
                                    </a>
                                    <h4 class="card-title" style="text-align: center">{{$product["name"]}}</h4>
                                    <h4 class="card-text" style="text-align: center">{{number_format($product["price"]). "₫"}}</h4>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        {{--<collum 2 >--}}
        <div class="col-lg-4">
            <p style="color: white">
                Order: {{ session()->has('table-'.$detail->id)?count(session()->get('table-'.$detail->id)):0 }}
            </p>
{{--            <table class="table-light table table-bordered" border="1px" >--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th scope="col">Name</th>--}}
{{--                    <th scope="col">Price</th>--}}
{{--                    <th scope="col">Quantity</th>--}}
{{--                    <th scope="col">Total</th>--}}
{{--                    <th scope="col">Action</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                <tr>--}}
{{--                    <td scope="row">1</td>--}}
{{--                    <td>Mark</td>--}}
{{--                    <td>Otto</td>--}}
{{--                    <td>@mdo</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td style="text-align: center" colspan="3">Total</td>--}}
{{--                    <td style="text-align: center" colspan="2">{{number_format("10000")}}</td>--}}
{{--                </tr>--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
</body>
</html>
@endsection
