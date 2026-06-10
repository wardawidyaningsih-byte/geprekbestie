<?php

namespace App\Http\Controllers;

use App\Models\Store;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::all();

        return view('home', compact('stores'));
    }

    public function show(Store $store)
    {
        return view('stores.show', compact('store'));
    }
}