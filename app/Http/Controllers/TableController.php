<?php

namespace App\Http\Controllers;

use App\Http\Controllers\InterfaceController\BaseInterface;
use App\Models\Product;
use App\Models\User;
use App\Repositories\ProductRepository;
use App\Repositories\StatusRepository;
use App\Repositories\TableRepository;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class TableController extends Controller
{
    protected $productRepository;
    protected $tableRepository;
    protected $statusRepository;

    public function __construct(TableRepository $tableRepository, StatusRepository $statusRepository, ProductRepository $productRepository)
    {
        $this->tableRepository = $tableRepository;
        $this->statusRepository = $statusRepository;
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $statuses = $this->statusRepository->getAll();
        $tables = $this->tableRepository->getAll();
        return view('backend.table.list', compact('tables', "statuses"));
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
        return view('backend.table.edit', compact('table'));
    }

    public function update(Request $request, $id)
    {
        $table = $this->tableRepository->edit($request, $id);
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

        $tableName = "table-" . $tableId;
        $order = session()->get($tableName) ?? [];
        $product = $this->productRepository->getById($productId);
        if (!isset($order[$productId])) {
            $order[$productId] = array(
                "id" => $product->id,
                "name" => $product->name,
                "price" => $product->price,
                "quantity" => 1
            );
        } else {
            $order[$productId]["quantity"]++;
        }
        session()->put($tableName, $order);
        return redirect()->back();
    }

    function deleteItemOrder($productId, $tableId)
    {
        $tableName = "table-" . $tableId;
        $order = session()->get($tableName) ?? [];
        if ($order[$productId]["quantity"] > 1) {
            $order[$productId]["quantity"]--;
        } else  {
            unset($order[$productId]);
        }
        session()->put($tableName, $order);
        toastr()->success("Delete success");
        return redirect()->back();
    }

    public function paymentOrder($tableId)
    {

        $tableName = "table-" . $tableId;
        session()->forget($tableName);
        toastr()->success("Payment success");
        return redirect()->back();
    }

    public function getByIdApi($id)
    {

    }




}
