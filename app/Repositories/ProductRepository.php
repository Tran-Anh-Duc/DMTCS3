<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\ipl\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function __construct(Product $product)
    {
        parent::__construct($product);
    }

    public function create(Request $request)
    {

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
//        $product['category_id'] = $request->input('category');
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $link = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('image');
            $image->move($path, $link);
            $product->image = $link;
        }
        $product->save();
        return $product;
    }

    public function edit(Request $request,$id)
    {
        Product::query()->findOrFail($id);
        $data = $request->only('name','price','category_id');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $data['image'] = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('image');
            $image->move($path, $data['image']);
        }
        return Product::query()->where("id", "=", $id)->update($data);
    }
}
