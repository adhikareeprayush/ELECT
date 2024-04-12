<?php
namespace App\Http\Controllers;

use App\Models\Messages; // Import the Message model
use App\Http\Controllers\Controller;
use App\Http\Requests\MessageRequest;
use App\Models\Products;
use Illuminate\Http\Request;

class AdminController extends Controller // Assuming this is inside a controller class
{
    // Fix: Correct the syntax for the function declaration
    public function index() {
        // latest 5 products from the products table
        $products = Products::latest()->take(5)->get();
        // total products count
        $productsCount = Products::count();
        // messagelist pass to the view
        $messages = Messages::all(); // Fetch all messages
        return view('admin.index', compact('products', 'productsCount', 'messages'));
    }
}