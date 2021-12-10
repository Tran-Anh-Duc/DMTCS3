<?php

namespace App\Http\Controllers;

use App\Http\Controllers\InterfaceController\BaseInterface;
use App\Repositories\CategoryRepository;
use App\Repositories\TableRepository;
use Illuminate\Http\Request;

class TableController extends Controller
{
    protected $tableRepository;
    protected $categoryRepository;

    public function __construct(TableRepository $tableRepository, CategoryRepository $categoryRepository)
    {
        $this->tableRepository = $tableRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $category = $this->categoryRepository->getAll();
        $tables = $this->tableRepository->getAll();
        return view('backend.table.list',compact('tables', "category"));
    }

    public function showFormCreate()
    {
        return view('backend.table.create');
    }

    public function store(Request $request)
    {
        $table = $this->tableRepository->create($request);
        return redirect()->route('tables.index');
    }

    public function showFormEdit($id)
    {
        $table = $this->tableRepository->getById($id);
        return view('backend.table.edit',compact('table'));
    }

    public function update(Request $request,$id)
    {
        $table = $this->tableRepository->edit($request,$id);
        return redirect()->route('tables.index');
    }

    public function destroy($id)
    {
        $table = $this->tableRepository->getById($id);
        $this->tableRepository->delete($id);
        return redirect()->route('tables.index');
    }

    function showDetail($id)
    {
        // TODO: Implement showDetail() method.
    }
}
