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
        $category = $this->CategoryRepository->create($request);
        toastr()->success("Create success");
        return redirect()->route('categories.index');
    }

    public function showFormEdit($id)
    {
        $category = $this->CategoryRepository->getById($id);
        return view('backend.category.edit',compact('category'));
    }

    public function update(Request $request,$id)
    {
        $category = $this->CategoryRepository->edit($request,$id);
        toastr()->success("Update success");
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
