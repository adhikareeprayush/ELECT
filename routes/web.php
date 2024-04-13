<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Messages;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


// Homepage
Route::get('/', function () {

    $products = Products::latest()->simplePaginate(3);
    return view('welcome', ['products' => $products]);
});

// Products Page
Route::get('/products', function () {
    $products = Products::latest()->simplePaginate(9);
    return view('products', ['products' => $products]);
});

// Product Individual Page
Route::get('/products/{id}', function ($id) {
    $product = Products::find($id);
    return view('product', ['product' => $product]);
});

// Admin Login Page
Route::get('/admin', function(){
    return view('admin.index');
});

// Admin Dashboard
Route::get('/admin/dashboard', function(){
    $products = Products::latest()->simplePaginate(9);
    return view('admin.dashboard', ['products' => $products]);
});

// Create Produt Admin
Route::get('/admin/create', function(){
    return view('admin.create');
});

// Update the product
Route::patch('/admin/edit/{id}', function(Request $request, $id) {
    // Validate request data
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'stock' => 'required|numeric',
        'price' => 'required|numeric',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Find the product by ID
    $product = Products::findOrFail($id);

    // Delete old image if a new image is uploaded
    if ($request->hasFile('image')) {
        if ($product->image) {
            Storage::delete($product->image);
        }
        $product->image = $request->file('image')->store('product_images');
    }

    // Update other product attributes
    $product->name = $request->input('name');
    $product->description = $request->input('description');
    $product->stock = $request->input('stock');
    $product->price = $request->input('price');
    $product->save(); // Changed from $product->update() to $product->save()

    // Redirect back to product list with a success message
    return redirect('/admin/product-list')->with('success', 'Product updated successfully!');
});


// Product Edit Page
Route::get('/admin/edit/{id}', function($id){
    $product = Products::find($id);
    return view('admin.edit', ['product' => $product]);
});


// Delete Product
Route::delete('/admin/product-list/delete/{id}', function($id){
    $product = Products::findOrFail($id);
    $product->delete();
    return redirect('/admin/product-list');
});

//Product List
Route::get('admin/product-list',function()
{
    $products = Products::latest()->simplePaginate(7);
    return view('admin.product-list', ['products' => $products]);
});


// Messages Admin
Route::get('admin/messages',function()
{
    $messages = App\Models\Messages::latest()->simplePaginate(7);
    return view('admin.messages', ['messages' => $messages]);
});

// Delete Messages admin
Route::delete('admin/messages/delete/{id}',function($id)
{
    $message = Messages::findOrFail($id);
    $message->delete(); 
    return redirect('/admin/messages');
});

//  Form Submission
Route::post('/', function(){
    $message = new Messages();
    $message->name = request('name');
    $message->email = request('email');
    $message->subject = request('subject');
    $message->phone = request('phone');
    $message->message = request('message');
    $message->save();

    return redirect('/');
});

// Admin Login
Route::post('/admin',function( Request $request){
    //check if the request has a username and password in admin database
    $username = $request->input('username');
    $password = $request->input('password');
    $admin = DB::table('admins')->where('username', $username)->where('password', $password)->first();
    if($admin)
        return redirect('/admin/dashboard');
    else
        return redirect('/admin/index');
});

