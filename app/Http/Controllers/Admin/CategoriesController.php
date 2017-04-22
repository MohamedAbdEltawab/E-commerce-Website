<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;

class CategoriesController extends Controller
{


    // ======= view the page content all categories =======
    public function index()
    {
    	$cat = Category::all();
    	return view('admin.category.allcategories', compact('cat'));
    }


    // ======= view the page content form to create new category
    public function create()
    {
    	return view('admin.category.addcat');
    }


    // ======= Store Main Category ======
    public function store()
    {

        $this->validate(request(), [
            'name' => 'required|min:3|max:50'
        ]);

        $category = Category::create(request(['name']));
      
        return back();
    }


    //  ==========  view page Edit Category ==========
    public function edit($id)
    {
    	$category = Category::find($id);
    	return view('admin.category.edit', compact('category'));
    }


    // ============  Upate Edit Category  ===========
    public function update($id)

    {

    	Category::find($id)->update(request()->all());

    

    	return redirect('adminpanel/categories');
    }


    //  ===========  Delete Category  ===============
    public function destroy($id)
    {

        Category::find($id)->delete();

    	
    	return back();
    }


    
    public function read($id, Category $category)
    {
        $category = Category::find($id);
        return view('admin.subcategory.index', compact('category'));

    }

    //===============Function website =================

    
    

}
