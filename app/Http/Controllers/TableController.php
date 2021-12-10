<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Repositories\TableRepository;
use Illuminate\Http\Request;

class TableController extends Controller
{
    protected $tableRepository;

    public function __construct(TableRepository $tableRepository)
    {
        $this->tableRepository = $tableRepository;
    }

    public function index()
    {
        $tables = $this->tableRepository->getAll();
        return view('backend.table.list',compact('tables'));
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

    public function addToOrder($productId, $tableId)
    {
        $tableName = "table-".$tableId;
        $order = session()->get($tableName) ?? [];
        $product = Product::where("id",$productId)->first();
        $order[$productId] = $product;
        session()->put($tableName, $order);
        return redirect()->back();

    }

    function showDetail($id)
    {
        // TODO: Implement showDetail() method.
    }
}
