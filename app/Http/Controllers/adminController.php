<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Mockery\Exception;

class adminController extends Controller
{

    //login system
    public function login(){
        return view('adminpanel.login');
    }

public function addadmin(){
        return view('adminpanel.addadmin');
}
    public function adminInfo(){
        $data['admins']=User::paginate(4);
        return view('adminpanel.adminlist')->with($data);
    }
    public function addadminInsert(Request $request){
        $this->validate($request,[
            'first_name'=>'required|min:2|max:20',
            'last_name'=>'nullable|min:2|max:20',
            'email'=>'required|min:2|max:50|unique:users',
            'password'=>'required|min:6|max:80',
            'retype_password'=>'required|same:password',
            'image'=>'nullable|mimes:jpeg,bmp,png|min:1|max:2000',
        ]);
     try {


         $user = new User();

         $user->first_name = $request->first_name;
         $user->last_name = $request->last_name;
         $user->email = $request->email;
         $user->password = bcrypt($request->password);

         if ($request->file('image')!=null){
              $uploadObject = $request->file('image');
             $filename = $uploadObject->getFilename() . str_random(30);
             $file_ext = $uploadObject->getClientOriginalExtension();

             if ($uploadObject->move(public_path('admin_photo'), $filename . '.' . $file_ext)) {
                 $photo_file = $filename . '.' . $file_ext;

             } else {
                 return $uploadObject->getErrorMessage();


             }
             $user->photo = $photo_file;
         }else{
             $user->photo=('admin.png');
         }
        $user->save();
         $request->session()->flash('success','Admin data insert Successfully');
     }catch (Exception $exception){
         return $exception;
     }
     return redirect()->back();
    }


    public function adminEdit(Request $request){
        $data['admin']=User::find($request->id);

        return view('adminpanel.adminDataEdit')->with($data);
    }
    public function adminUpdate(Request $request){
        $this->validate($request,[
            'first_name'=>'required|min:2|max:20',
            'last_name'=>'nullable|min:2|max:20',
            'email'=>'required|min:2|max:50',
            'password'=>'required|min:6|max:80',
            'retype_password'=>'required|same:password',
            'image'=>'nullable|mimes:jpeg,bmp,png|min:1|max:2000',
        ]);
        try {


            $admin = User::find($request->id);


            $admin->first_name = $request->first_name;
            $admin->last_name = $request->last_name;
            $admin->email = $request->email;
            $admin->password = bcrypt($request->password);


            if ($request->file('image') != null) {

                $image=User::where('id',$request->id)->first();
                $file= $image->photo;
                $filename = public_path().'/admin_photo/'.$file;
                \File::delete($filename);

                $uploadObject = $request->file('image');
                $filename = $uploadObject->getFilename() . str_random(30);
                $file_ext = $uploadObject->getClientOriginalExtension();

                if ($uploadObject->move(public_path('admin_photo'), $filename . '.' . $file_ext)) {
                    $photo_file = $filename . '.' . $file_ext;

                } else {
                    return $uploadObject->getErrorMessage();


                }
                $admin->photo = $photo_file;

            }
            $admin->update();
            $request->session()->flash('success','Admin data update successfully');

        }catch (Exception $exception){
            $request->session()->flash('error','Admin data update failed');
        }
        return redirect('adminInfo');
    }
    public function adminDelete(Request $request){
        $admin=User::find($request->id);
        $image=User::where('id',$request->id)->first();
        $file= $image->photo;
         $filename = public_path().'/admin_photo/'.$file;
        \File::delete($filename);

       $res=$admin->delete();
        if ($res) {
            $request->session()->flash('success', 'Admin Data delete Successfully');
            return redirect()->back();
        } else {
            $request->session()->flash('error', 'Admin Data delete failed');
            return redirect()->back();
        }

    }
}
