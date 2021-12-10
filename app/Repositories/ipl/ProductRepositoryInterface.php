<?php

namespace App\Repositories\ipl;

use Illuminate\Http\Request;

interface ProductRepositoryInterface extends BaseRepositoryInterface
{
    public function create(Request $request);

    public function edit(Request $request, $id);

}
