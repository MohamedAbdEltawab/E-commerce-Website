<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;

class CategoriesController extends Controller
{
    
    public function index()
    {
    	$cat = Category::all();
    	return view('admin.category.allcategories', compact('cat'));
    }
    public function create()
    {
    	return view('admin.category.addcat');
    }
    public function store(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50'
        ]);
    	$category = new Category;
    	$category->name = $request->name;
    	$category->save();

        return back();
    }
    public function edit($id)
    {
    	$category = Category::find($id);
    	return view('admin.category.edit', compact('category'));
    }
    public function update($id, Category $category, Request $request)
    {
    	$categoryupdated = $category->find($id);
    	$categoryupdated->update($request->all());
    	return redirect('adminpanel/categories');
    }

    public function destroy($id, Category $category)
    {
    	$category = $category->find($id);
    	$category->delete();
    	return back();
    }
    public function read($id, Category $category)
    {
        $category = $category->find($id);
        return view('admin.subcategory.index', compact('category'));

    }

    //===============Function website =================

    
    

}
