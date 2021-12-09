<?php

namespace App\Http\Controllers\InterfaceController;

use Illuminate\Http\Request;

interface BaseInterface
{

    function index();
    function destroy($id);
    function update(Request $request,$id);
    function store(Request $request);
    function showDetail($id);

}
