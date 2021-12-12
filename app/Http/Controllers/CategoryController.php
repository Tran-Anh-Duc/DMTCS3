<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepository  $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    public function index()
    {
        $categories = $this->categoryRepository->getAll();
        return view('backend.category.list',compact('categories'));
    }

    public function showFormCreate()
    {
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        $this->categoryRepository->create($request);
        $request->validate([
            "name" => "required",
            "description" => "required"
        ]);
        toastr()->success("Create success");
        return redirect()->route('categories.index');
    }

    public function showFormEdit($id)
    {
        $category = $this->categoryRepository->getById($id);
        return view('backend.category.edit',compact('category'));
    }

    public function update(Request $request,$id)
    {
        $this->categoryRepository->edit($request,$id);
        toastr()->success("Update success");
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
//        $this->CategoryRepository->getById($id);
        $this->categoryRepository->delete($id);
        toastr()->success("Delete success");
        return redirect()->route('categories.index');
    }

    public function showDetail($id)
    {
        $category = $this->categoryRepository->getById($id);
        return view('backend.category.detail',compact('category'));
    }

}
