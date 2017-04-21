<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Subcategory as Subcat;

use App\Category;

class SubcategoryController extends Controller
{
    public function store($id, Request $request, Subcat $subcat)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50'
        ]);
    	$subcat = new Subcat;

    	$subcat->name = $request->name;

    	$subcat->category_id = $id;
    	$subcat->save();

        return back();
    }
    public function edit($id)
    {
    	$subcategory = Subcat::find($id);
    	return view('admin.subcategory.edit', compact('subcategory'));
    }
    public function update($id, Request $request, Subcat $subcat)
    {
    	$subcatupdated = $subcat->find($id);
    	$subcatupdated->update($request->all());
    	return back();
    }


    public function destroy($id, Subcat $subcat)
    {
    	$subact = Subcat::find($id)->delete();
    	return back();
    }

    public function index($id)
    {
        $subcat = Subcat::find($id);
        return view('admin.products.index', compact('subcat'));
    }

    
}
