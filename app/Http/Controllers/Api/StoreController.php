<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        return Store::paginate(10);
    }

    public function store(Request $request)
    {

    }


    public function show(Store $store)
    {
        return $store;
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
