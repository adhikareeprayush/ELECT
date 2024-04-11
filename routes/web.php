<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


Route::get('/', function () {

    $products = App\Models\Products::latest()->simplePaginate(3);
    return view('welcome', ['products' => $products]);
});


Route::get('/products/{id}', function ($id) {
    $product = App\Models\Products::find($id);
    return view('product', ['product' => $product]);
});

Route::get('/products', function () {
    $products = App\Models\Products::latest()->simplePaginate(9);
    return view('products', ['products' => $products]);
});

Route::get('/admin', function(){
    $products = App\Models\Products::latest()->simplePaginate(9);
    return view('admin.index', ['products' => $products]);
});

Route::get('/admin/create', function(){
    return view('admin.create');
});

Route::patch('/admin/edit/{id}', function($id){

    //validate
    request()->validate([
        'name' => ['required', 'min:3'],
        'description'=>['required','min:10'],
        'image' => ['image', 'mimes:jpeg,png,jpg,gif', 'max:2048'], // Example validation for image upload
        'stock'=>['required'],
        'price'=>['required'],
        'quantity'=>['required'],
    ]);

    $product = App\Models\Products::findOrFail($id);

    $product->update([
        'name'=> request('name'),
        'description'=> request('description'),
        'stock'=> request('stock'),
        'price'=> request('price'),
        'quantity'=> request('quantity'),
    ]);

    if (request()->hasFile('image')) {
        $imagePath = request('image')->store('uploads', 'public'); // Save the image to the 'public/uploads' directory
        $product->image = $imagePath; // Save the image path to the database
    }

    return redirect('/admin/product-list');
});



Route::get('/admin/edit/{id}', function($id){
    $product = App\Models\Products::find($id);
    return view('admin.edit', ['product' => $product]);
});


// Delete
Route::delete('/admin/delete/{id}', function($id){
    $product = App\Models\Products::findOrFail($id);
    $product->delete();
    return redirect('/admin/product-list');
});

Route::get('admin/product-list',function()
{
    $products = App\Models\Products::latest()->simplePaginate(7);
    return view('admin.product-list', ['products' => $products]);
});