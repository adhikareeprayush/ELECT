<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Messages;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


Route::get('/', function () {

    $products = Products::latest()->simplePaginate(3);
    return view('welcome', ['products' => $products]);
});


Route::get('/products/{id}', function ($id) {
    $product = Products::find($id);
    return view('product', ['product' => $product]);
});

Route::get('/products', function () {
    $products = Products::latest()->simplePaginate(9);
    return view('products', ['products' => $products]);
});

Route::get('/admin', function(){
    return view('admin.index');
});

Route::get('/admin/dashboard', function(){
    $products = Products::latest()->simplePaginate(9);
    return view('admin.dashboard', ['products' => $products]);
});

Route::get('/admin/create', function(){
    return view('admin.create');
});

Route::patch('/admin/edit/{id}', function(Request $request, $id) {
    // Validate request data
    // $request->validate([
    //     'name' => 'required',
    //     'description' => 'required',
    //     'stock' => 'required|numeric',
    //     'price' => 'required|numeric',
    //     'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    // ]);

    // Find the product by ID
    $product = Products::findOrFail($id);

    echo $product->name;

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
    $product->update();

    // Redirect back to product list
    return redirect('/admin/product-list');
});



Route::get('/admin/edit/{id}', function($id){
    $product = Products::find($id);
    return view('admin.edit', ['product' => $product]);
});


// Delete
Route::delete('/admin/product-list/delete/{id}', function($id){
    $product = Products::findOrFail($id);
    $product->delete();
    return redirect('/admin/product-list');
});

Route::get('admin/product-list',function()
{
    $products = Products::latest()->simplePaginate(7);
    return view('admin.product-list', ['products' => $products]);
});

Route::get('admin/messages',function()
{
    $messages = App\Models\Messages::latest()->simplePaginate(7);
    return view('admin.messages', ['messages' => $messages]);
});

Route::delete('admin/messages/delete/{id}',function($id)
{
    $message = Messages::findOrFail($id);
    $message->delete(); 
    return redirect('/admin/messages');
});

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