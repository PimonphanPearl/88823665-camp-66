<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\ProductList;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $users = User::all();
        $categories = Category::all();
        $products = ProductList::with('category', 'user')->get();

        return view('product', compact('categories', 'products', 'users'));
    }

    public function insert(Request $req){
        $category = new Category();
        $category->name = $req->category_name;
        $category->save();

        if (is_array($req->product_name)) {
            foreach($req->product_name as $value){
                $product = new ProductList();
                $product->name = $value;
                $product->category_id = $category->id;
                if (session()->has('user')) {
                    $product->user_id = session('user')->id;
                    $product->save();
                } else {
                    // Handle the case where the session user is not set
                    return redirect('/product')->withErrors('User session not found.');
                }
            }
        } else {
            // Handle the case where product_name is not an array
            return redirect('/product')->withErrors('Product names are not provided.');
        }
        return redirect('/product');
    }
}