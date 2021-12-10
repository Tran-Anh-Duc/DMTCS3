<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Repositories\StatusRepository;
use App\Repositories\TableRepository;
use Illuminate\Http\Request;

class TableController extends Controller
{
    protected $tableRepository;
    protected $statusRepository;

    public function __construct(TableRepository $tableRepository, StatusRepository $statusRepository)
    {
        $this->tableRepository = $tableRepository;
        $this->statusRepository = $statusRepository;
    }

    public function index()
    {
        $statuses = $this->statusRepository->getAll();
        $tables = $this->tableRepository->getAll();
        return view('backend.table.list',compact('tables', "statuses"));
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
