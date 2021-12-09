<?php

namespace App\Http\Controllers;

use App\Http\Controllers\InterfaceController\BaseInterface;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller implements BaseInterface
{
    protected $CategoryRepository;

    public function __construct(CategoryRepository  $categoryRepository)
    {
        $this->CategoryRepository = $categoryRepository;
    }
    public function index()
    {
        $categories = $this->CategoryRepository->getAll();
        return view('backend.category.list',compact('categories'));
    }

    public function showFormCreate()
    {
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required| max:20 | min:3",
            "price" => "required",
            "description" => "required"
        ]);
        $category = $this->CategoryRepository->create($request);
        return redirect()->route('categories.index');
    }

    public function showFormEdit($id)
    {
        $category = $this->CategoryRepository->getById($id);
        return view('backend.category.edit',compact('category'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            "name" => "required| max:20 | min:3",
            "price" => "required",
            "description" => "required"
        ]);
        $category = $this->CategoryRepository->edit($request,$id);
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $category = $this->CategoryRepository->getById($id);
        $this->CategoryRepository->delete($id);
        return redirect()->route('categories.index');
    }

    public function showDetail($id)
    {
        $category = $this->CategoryRepository->getById($id);
        return view('backend.category.detail',compact('category'));
    }

}
