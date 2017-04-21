<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input;
use App\Category;
use App\Subcategory;
use App\Product;
use App\Slide;
use DB;

class Gcategorycontroller extends Controller
{
   
    public function home()
    {
       
        return view('welcome');
    }
    public function showAllCategories()
    {
    	$categories = Category::all();
    
    	return view('layouts.allcategories', compact('categories'));
    }
    public function showsubcategories($id)
    {
    	
    	$subcat = Subcategory::find($id);
    	
    	return view('layouts.subcategory', compact('subcat'));
    }
    public function viewProduct($id)
    {
    	
    	$products = Product::find($id);
    	return view('layouts.product', compact('products'));
    }

    public function viewsubcategory($id)
    {
    	
    	$category = Category::find($id);
    	
    	return view('layouts.subcat', compact('category'));
    }

    public function search(Request $request)
    {
        $query = $request->q;
        if($query!='')
        {
            
             
            $subcategory = DB::table('subcategories')->where('name', 'LIKE', '%' . $query . '%')->paginate(10);
            $products = DB::table('products')->where('name', 'LIKE', '%' . $query . '%')->paginate(10);
            
        }
        
        return view('layouts.search', compact('subcategory', 'products', 'query'));
    }

    public function getAbout()
    {
        return view('layouts.about');   
    }

    public function getContact()
    {
        return view('layouts.contactus');
    }

    

}
