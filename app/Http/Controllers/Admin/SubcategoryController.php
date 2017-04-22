<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Subcategory as Subcat;

use App\Category;

class SubcategoryController extends Controller
{


    //========== store Subcategory =============
    
    public function store($id)

    {

        $this->validate(request(), [
            'name' => 'required|min:3|max:50'
        ]);

        Subcat::create([

            'name'          => request('name'),
            'category_id'   => $id

            ]);

        return back();
    }


    //========= view page Edit Subcategory ============

    public function edit($id)
    {

    	$subcategory = Subcat::find($id);
    	return view('admin.subcategory.edit', compact('subcategory'));

    }

    //========= Update Subcategory ============

    public function update($id, Request $request)
    {
    	Subcat::find($id)->update($request->all());
    
    	return back();
    }

    //========= Delete Subcategory =========

    public function destroy($id)
    {
    	Subcat::find($id)->delete();
    	return back();
    }

    public function index($id)
    {
        $subcat = Subcat::find($id);
        return view('admin.products.index', compact('subcat'));
    }

    
}
