<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.home');
    }

    public function create()
    {
        return view('products.add_product');
    }

    public function store(Request $request){
        // dd($request->all());
        $credentials = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'amount' => 'required'
        ]);

        $imagePath = null;

        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->storeAs('product_images', $imageName, 'public');
            $imagePath = 'product_images/' . $imageName;
        }   

        $product = Product::create([
            'name' => $credentials['name'],
            'description' => $credentials['description'],
            'category' => $credentials['category'],
            'price' => $credentials['price'],
            'img' => $imagePath,
            'amount' => $credentials['amount'],
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('products.home');        
        
    }


    public function show($id)
    {
        $product = Product::find($id);
        // dd($product);
        return view('products.product', ['product' => $product]);
        // return view('products.show', compact('product'));
    }
}
