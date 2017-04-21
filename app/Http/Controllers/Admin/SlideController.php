<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Slide;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::all();
    	return view('admin.slide.allphotos', compact('slides'));
    }
    public function edit($id)
    {
        $slide = Slide::find($id);
        return view('admin.slide.editphoto', compact('slide'));
    }

    public function updateone($id, Request $request, Slide $slide)
    {
        $this->validate($request, [
             'photoone'       => 'required|mimes:jpeg,bmp,png, jpg'
        ]);
        $slideupdate = Slide::find($id);
        
        if($request->hasFile('photoone'))
        {

        @unlink(public_path().'/upload/slide'.$slideupdate->photoone);
        
        $fileone     = $request->file('photoone');
        $pathone     = public_path().'/upload/slide';
        
        $filenameone = time().'.'.$fileone->getClientOriginalExtension();
        
        }
        if($fileone->move($pathone, $filenameone))
        {
            $slideupdate->photoone = $filenameone;
           
            
        }

         $slideupdate->update();
         return back();
    }
    

   public function updatetwo($id, Request $request, Slide $slide)
    {
        $this->validate($request, [
             'phototwo'       => 'required|mimes:jpeg,bmp,png, jpg'
        ]);

        $slideupdate = Slide::find($id);
        
        if($request->hasFile('phototwo'))
        {

        @unlink(public_path().'/upload/slide'.$slideupdate->phototwo);
        
        $filetwo     = $request->file('phototwo');
        $pathtwo     = public_path().'/upload/slide';
        
        $filenametwo = time().'.'.$filetwo->getClientOriginalExtension();
        
        }
        if($filetwo->move($pathtwo, $filenametwo))
        {
            $slideupdate->phototwo = $filenametwo;
           
            
        }

         $slideupdate->update();
         return back();
    }

    public function updatethree($id, Request $request, Slide $slide)
    {
        $this->validate($request, [
             'photothree'       => 'required|mimes:jpeg,bmp,png, jpg'
        ]);

        $slideupdate = Slide::find($id);
        
        if($request->hasFile('photothree'))
        {

        @unlink(public_path().'/upload/slide'.$slideupdate->photothree);
        
        $filethree     = $request->file('photothree');
        $paththree     = public_path().'/upload/slide';
        
        $filenamethree = time().'.'.$filethree->getClientOriginalExtension();
        
        }
        if($filethree->move($paththree, $filenamethree))
        {
            $slideupdate->photothree = $filenamethree;
           
            
        }

         $slideupdate->update();
         return back();
    }

    public function updatefour($id, Request $request, Slide $slide)
    {
        $this->validate($request, [
             'photofour'       => 'required|mimes:jpeg,bmp,png, jpg'
        ]);
        
        $slideupdate = Slide::find($id);
        
        if($request->hasFile('photofour'))
        {

        @unlink(public_path().'/upload/slide'.$slideupdate->photofour);
        
        $filefour     = $request->file('photofour');
        $pathfour     = public_path().'/upload/slide';
        
        $filenamefour = time().'.'.$filefour->getClientOriginalExtension();
        
        }
        if($filefour->move($pathfour, $filenamefour))
        {
            $slideupdate->photofour = $filenamefour;
           
            
        }

         $slideupdate->update();
         return back();
    }

}
