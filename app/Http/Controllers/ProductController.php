<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productRepository;
    protected $categoryRepository;

    public function __construct(ProductRepository $productRepository ,CategoryRepository $categoryRepository)
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository =$categoryRepository;
    }

    public function index()
    {
        $products = $this->productRepository->getAll();
        return view("backend.product.list", compact("products"));
    }

    public function showFormCreate()
    {
        $categories = $this->categoryRepository->getAll();
        return view("backend.product.create",compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required| max:20 | min:3",
            "price" => "required"
        ]);
        $this->productRepository->create($request);
//        session()->flash("success","Create Success");
        toastr()->success("Create success");
        return redirect()->route('products.list');
    }

    public function showDetail($id)
    {
        $product = $this->productRepository->getById($id);
        return view("backend.product.detail", compact("product"));
    }

    public function showFormEdit($id)
    {
        $product = $this->productRepository->getById($id);
        return view("backend.product.edit",compact("product"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => "required| max:20 | min:3",
            "price" => "required"
        ]);
        $this->productRepository->edit($request,$id);
        toastr()->success("Update success");
        return redirect()->route("products.list");
    }

    public function destroy($id)
    {
        $this->productRepository->delete($id);
        toastr()->success("Delete success");
        return redirect()->route("products.list");
    }
}
