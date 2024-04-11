
<?php
use App\Models\Product; // Import the Product model
use App\Models\Message; // Import the Message model

public function index()
{
   
    // latest 5 products from the products table
    $products = Product::latest()->take(5)->get();
    // total products count
    $productsCount = Product::count();
    // messagelist pass to the view
    $messages = Message::all(); // Fetch all messages
    return view('admin.index', compact('products', 'productsCount', 'messages'));
    }



