<?php

use Illuminate\Support\Facades\Route;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


Route::get('/', function () {

    $products = App\Models\Products::latest()->simplePaginate(3);
    return view('welcome', ['products' => $products]);
});

Route::get('/products', function () {
    $products = App\Models\Products::latest()->simplePaginate(9);
    return view('products', ['products' => $products]);
});