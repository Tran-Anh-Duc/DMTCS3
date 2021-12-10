<?php

namespace App\Repositories\ipl;

use Illuminate\Http\Request;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
    public function edit(Request $request, $id);

}
