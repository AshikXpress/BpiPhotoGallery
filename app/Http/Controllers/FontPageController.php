<?php

namespace App\Http\Controllers;

use App\Model\Gallery;
use Illuminate\Http\Request;

class FontPageController extends Controller
{
    public function landPage(){
        $data['allImage']=Gallery::orderBy('celebration_year','asc')->paginate(15);
        return view('fontPage.allimage')->with($data);
    }
    public function demo(){
      return view('fontPage.allGalleryImage');
    }
}
