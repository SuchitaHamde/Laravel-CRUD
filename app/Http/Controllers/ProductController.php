<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function addProduct()
    {
        return view('add-product');
    }
    public function store(Request $request)
     {
         $name = $request->name;
         $price = $request->price;
         $category = $request->category;
         $details = $request->details;
         $image = $request->file('image');
         $imageName = time(). '.' .$image->extension();
         $image->move(public_path('images'), $imageName);

         $product = new Product();
         $product->name = $name;
         $product->price = $price;
         $product->category = $category;
         $product->details = $details;
         $product->image = $imageName;
         $product->save();

         return redirect('add-product')->with('product-add', 'Product added successfully');
        

    }

    public function products()
    {
        $products = Product::all();

        return view('allProducts', compact('products'));
 
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('edit', compact('product'));
    }
    public function update(Request $request)
    {
         $name = $request->name;
         $price = $request->price;
         $category = $request->category;
         $details = $request->details;
         $image = $request->file('image');
         $imageName = time(). '.' .$image->extension();
         $image->move(public_path('images'), $imageName);
    

          $product = Product::find($request->id);
          $product->name = $name;
          $product->price = $price;
          $product->category = $category;
          $product->details = $details;
          $product->image = $imageName;
          $product->save();
       
        // return redirect('/products');

        return back()->with('updated', 'Product records updated successfully!');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        unlink(public_path('images'). '/' .$product->image);
        $product->delete();
        return back()->with('deleted', 'Product records deleted successfully!');
    }
    public function show($id)
    {
        $product = Product::find($id);
        return view('show')->with('product', $product);
    }
}

