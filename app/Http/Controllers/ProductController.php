<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use App\Repositories\TableRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productRepository;
    protected $categoryRepository;
    protected $tableRepository;

    public function __construct(ProductRepository $productRepository ,CategoryRepository $categoryRepository, TableRepository $tableRepository)
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository =$categoryRepository;
        $this->tableRepository = $tableRepository;
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
        $this->productRepository->create($request);
        $request->validate([
            "name" => "required| max:20 | min:5",
            "price" => "required"
        ]);
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
        $categories = $this->categoryRepository->getAll();
        $product = $this->productRepository->getById($id);
        return view("backend.product.edit",compact("product","categories"));
    }

    public function update(Request $request, $id)
    {

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

    public function showOrder($id)
    {
        $detail = $this->tableRepository->getById($id);
        $products = $this->productRepository->getAll();
        $categories = $this->categoryRepository->getAll();
        return view("backend.product.order", compact("products", "categories", "detail"));
    }
}
