<a href="{{route('products.create')}}">
    <button>Create Product</button>
</a>
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



