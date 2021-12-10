<?php

namespace App\Repositories;

use App\Models\Table;
use App\Repositories\ipl\TableRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TableRepository extends  BaseRepository implements TableRepositoryInterface
{

    public function __construct(Table $table)
    {
        parent::__construct($table);
    }

    public function create(Request $request)
    {
        $data = $request->only('name');
        $table = Table::create($data);
        return $table;
    }

    public function edit(Request $request,$id)
    {
        $table = Table::findOrFail($id);
        $data = $request->only('name');
        return Table::where('id','=',$id)->update($data);
    }



}
