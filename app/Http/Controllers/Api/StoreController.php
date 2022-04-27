<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class StoreController extends Controller
{
    public function index()
    {
        return Store::paginate(10);
    }

    public function store(Request $request)
    {
        return Store::create($request->all());
    }


    public function show(Store $store)
    {
        return $store->with('products')->get();
    }

    public function update(Request $request, Store $store)
    {
        $store->update($request->all());
        return $store;
    }

    public function destroy(Store $store)
    {
        try{
            return $store->delete();
        }catch(\Exception $e){
            Log::emergency($e->getMessage());
            return response('can\'t delete this store', 500)
                ->header('Content-Type', 'text/plain');
        }
    }
}
