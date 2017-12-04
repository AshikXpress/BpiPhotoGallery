<?php

namespace App\Http\Controllers;

use App\Model\Gallery;
use App\Model\Video;
use Illuminate\Http\Request;
use Mockery\Exception;

class galleryController extends Controller
{
    //admin pages
    public function dashboard(){
        $data['images']=Gallery::orderBy('id','desc')->paginate(12);
        return view('adminpanel.dashboard')->with($data);
    }

    public function allGalleryImage(){
        $data['totalImage'] = Gallery::count();

        $data['allGalleryImage']=Gallery::orderBy('celebration_year','asc')->paginate(15);
        return view('adminpanel.allGalleryImage')->with($data);
    }
    public function addimage(){
        return view('adminpanel.addimage');
    }

    public function addimageUp(Request $request){
      $this->validate($request,[
          'caption'=>'nullable|min:2|max:255',
          'year'=>'required|min:2|max:255',
          'celebration'=>'required|min:1|max:255',
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
     public function editImage(Request $request){
        $data['image']=Gallery::find($request->id);
        return view('adminpanel.editImage')->with($data);
     }
     public function updateImage(Request $request){


         $this->validate($request, [
             'caption' => 'nullable|min:2|max:255',
             'year' => 'required|min:2|max:255',
             'celebration' => 'required|min:1|max:255',
             'descpt' => 'nullable|min:10|max:600',
             'image' => 'nullable|mimes:jpeg,bmp,png|min:1|max:10000',
         ]);
         try {
             $gallery = Gallery::find($request->id);
             $gallery->caption = $request->caption;
             $gallery->celebration_year = $request->year;
             $gallery->celebration_name = $request->celebration;
             $gallery->celebration_descpt = $request->descpt;

             if ($request->file('image') != null) {

                 $image=Gallery::where('id',$request->id)->first();
                 $file= $image->photo;
                 $filename = public_path().'/gallery/'.$file;
                 \File::delete($filename);

                 $uploadObject = $request->file('image');
                 $filename = $uploadObject->getFilename() . str_random(30);
                 $file_ext = $uploadObject->getClientOriginalExtension();

                 if ($uploadObject->move(public_path('gallery'), $filename . '.' . $file_ext)) {
                     $photo_file = $filename . '.' . $file_ext;
                     $gallery->photo = $photo_file;

                 } else {
                     return $uploadObject->getErrorMessage();


                 }


             }
             $gallery->update();
             $request->session()->flash('success','Gallery data update successfully');


         }catch (Exception $exception){

         }
        return redirect()->back();

     }

     public function imageDelete(Request $request){
         $imagDel=Gallery::find($request->id);

         $image=Gallery::where('id',$request->id)->first();
         $file= $image->photo;
         $filename = public_path().'/gallery/'.$file;
         \File::delete($filename);

         $res=$imagDel->delete();

         if ($res){
             $request->session()->flash('success','Image and content delete successfully');

         }else{
             $request->session()->flash('error','Image and content delete failed');

         }
         return redirect()->back();
     }
public function imageDetails(Request $request){
         $data['imageDetails']=Gallery::find($request->id);
        return view('adminpanel.imageDetails')->with($data);
}

   //youtube video embeded

    public function addvideo(){

         return view('youtubevideo.addvideo');
    }
public function addvideoUp(Request $request){
    $this->validate($request, [
        'caption' => 'nullable|min:2|max:255',
        'year' => 'required|min:2|max:255',
        'celebration' => 'required|min:1|max:255',
        'descpt' => 'nullable|min:10|max:600',
        'youtube_id' => 'min:11|max:100',
    ]);
    $video=new Video();
    $video->caption=$request->caption;
    $video->celebration_year=$request->year;
    $video->celebration_name=$request->celebration;
    $video->youtube_id=$request->youtube_id;
    $video->celebration_descpt=$request->descpt;
    $res=$video->save();
    if ($res){
        $request->session()->flash('success','Youtube video id and data insert successfully');
    }else{
        $request->session()->flash('error','Youtube video id and data insert failed');
    }

    return redirect()->back();

}
public function editVideo(Request $request){
    $data['video']=Video::find($request->id);

    return view('youtubevideo.videoedit')->with($data);
}
public function videoUpdate(Request $request){
    $this->validate($request, [
        'caption' => 'nullable|min:2|max:255',
        'year' => 'required|min:2|max:255',
        'celebration' => 'required|min:1|max:255',
        'descpt' => 'nullable|min:10|max:600',
        'youtube_id' => 'min:11|max:100',
    ]);
    $video=Video::find($request->id);
    $video->caption=$request->caption;
    $video->celebration_year=$request->year;
    $video->celebration_name=$request->celebration;
    $video->youtube_id=$request->youtube_id;
    $video->celebration_descpt=$request->descpt;
    $res=$video->update();
    if ($res){
        $request->session()->flash('success','Youtube video id and data update successfully');
    }else{
        $request->session()->flash('error','Youtube video id and data update failed');
    }

    return redirect()->back();
}
public function videoDelete(Request $request){
    $videoDel=Video::find($request->id);

    $res=$videoDel->delete();

    if ($res){
        $request->session()->flash('success','Video and content delete successfully');

    }else{
        $request->session()->flash('error','Video and content delete failed');

    }
    return redirect()->back();
}
public function videoDetailes(Request $request){
    $data['videoDetails']=Video::find($request->id);
    return view('youtubevideo.videoDetails')->with($data);
}
public function allYoutubeVideo(){
    $data['totalVideo']=Video::count();
    $data['allYoutubeVideo']=Video::orderBy('celebration_year','asc')->paginate(8);

    return view('youtubevideo.allYoutubeVideo')->with($data);
}


}
