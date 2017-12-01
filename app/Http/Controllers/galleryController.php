<?php

namespace App\Http\Controllers;

use App\Model\Gallery;
use Illuminate\Http\Request;

class galleryController extends Controller
{
    //admin pages
    public function dashboard(){
        $data['images']=Gallery::orderBy('id','desc')->paginate(12);
        return view('adminpanel.dashboard')->with($data);
    }
    public function addimage(){
        return view('adminpanel.addimage');
    }

    public function addimageUp(Request $request){
      $this->validate($request,[
          'caption'=>'nullable|min:2|max:255',
          'year'=>'required|min:2|max:255',
          'celebration'=>'required|min:2|max:255',
          'descpt'=>'nullable|min:10|max:600',
          'image'=>'required|mimes:jpeg,bmp,png|min:1|max:10000',
      ]);

    $gallery=new Gallery();
    $gallery->caption=$request->caption;
    $gallery->celebration_year=$request->year;
    $gallery->celebration_name=$request->celebration;
    $gallery->celebration_descpt=$request->descpt;

        $uploadObject = $request->file('image');
        $filename = $uploadObject->getFilename() . str_random(30);
        $file_ext = $uploadObject->getClientOriginalExtension();

        if ($uploadObject->move(public_path('gallery'), $filename . '.' . $file_ext)) {
            $photo_file = $filename . '.' . $file_ext;

        } else {
            return $uploadObject->getErrorMessage();


        }

        $gallery->photo=$photo_file;
        $res=$gallery->save();
        if ($res){
            $request->session()->flash('success','Gallery data insert successfully');
        }else{
            $request->session()->flash('error','Gallery data insert failed');
        }

    return redirect()->back();
     }
}
