<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    //get
    public function index()
    {
        
        $products = Product::get();

        // dd($products);

        return view('products.products', ['collectionData' => $products]);
      
    }

    //create
    public function create()
    {

        return view('products.new');
    }

   //store 
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'title' => 'required|unique:products|max:200'

        ]);

        // dd($request->title);
        $product = new Product;
        $product->title = $request->title;
        $product->category = $request->category;
        $product->freshness = $request->freshness;
        $product->size = json_encode($request->size);
        $product->save();
        return redirect()->route('product.index'); 
    }

    //edit
    public function edit($id)
    {
        // dd($id);
        $product = Product::where('id', $id)->first();
        return view('products.edit', compact('product'));
    }
    
    //update
    public function update(Request $request, $id)
    {

        $product = Product::where('id', $id)->first();
        $product->title = $request->title;
        $product->category = $request->category;
        $product->freshness = $request->freshness;
        $product->size = json_encode($request->size);
        $product->save();
        return redirect()->route('product.index'); 
    }


    //delete
    public function destroy($id)
    {

        $product = Product::whereId($id)->first();
        $product->delete();
        return redirect()->route('product.index'); 
    }
 
}
