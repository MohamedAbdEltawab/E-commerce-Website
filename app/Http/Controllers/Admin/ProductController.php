<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Product;
use App\Category;
use Intervention\Image\Facades\Image;
use Session;
use App\Cart;
use App\Subcategory;

class ProductController extends Controller
{

    //=============== Store product information in database 

    public function store($id, Request $request)
    {

        $this->validate(request(), [
             'name'        => 'required|min:3|max:25',
             'description' => 'required|max:50',
             'price'       => 'required|numeric',
             'amount'      => 'required|numeric',
             'photo'       => 'required|mimes:jpeg,bmp,png, jpg'
        ]);

       
    	$product = new Product;
    	$product->subcategory_id = $id;
    	$product->name = $request->name;
    	$product->description = $request->description;
    	$product->price = $request->price;
    	$product->amount = $request->amount;
    	$product->color = $request->color;

        $file     = $request->file('photo');
        $path     = public_path().'/upload/product';
        $filename = time().'.'.$file->getClientOriginalExtension();

        if($file->move($path, $filename))
        {
            $product->photo = $filename;
        }
        
    	//dd($request);
    	$product->save();

        return back();
    }


    public function edit($id)
    {
    	$product = Product::find($id);
    	return view('admin.products.edit', compact('product'));
    }


    //===================== Update product information 
    public function update($id, Request $request, Product $product)
    {
    	$productupdate = Product::find($id);

        if($request->hasFile('photo'))
        {

        @unlink(public_path().'/upload/product'.$productupdate->photo);
        
        $file     = $request->file('photo');
        $path     = public_path().'/upload/product';
        $filename = time().'.'.$file->getClientOriginalExtension();
        }
        if($file->move($path, $filename))
        {
            $productupdate->photo = $filename;
        }

    	$productupdate->update($request->all());
    	return back();
    }


    public function destroy($id)
    {
    	$product = Product::find($id)->delete();
    	return back();
    }


    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart'): null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);

        return back();

    }

    public function getCart()
    {
        if(!Session::has('cart')){
            $categories = Category::all();
            return view('layouts.shopcart', compact('categories'));
        }
        $categories = Category::all();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('layouts.shopcart', ['products'=>$cart->items, 'totalPrice'=>$cart->totalPrice,'categories'=>$categories]);
    }
}
