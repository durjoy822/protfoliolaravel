<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $admin;


    public  function adminUser(){
        return view('admin.user.index');
    }
    public  function userManage(){
        return view('admin.user.manage',[
            'users'=> AdminUser::all()
        ]);
    }
    public  function user_save(Request $request){
//        dd($request->all());
        $this->admin= new AdminUser();
        $this->admin->name  =    $request->name;
        $this->admin->email =    $request->email;
        $this->admin->image =    $this->saveImage($request);
        $this->admin->save();
        return redirect(route('admin.manage'));

    }
    public function saveImage($request){
        $image =$request->file('image');
//        $imageName=rand().'.'.$image->extension();
        $imageName=rand().'.'.$image->getClientOriginalExtension();
        $directory='admin/Userimage/image/';
        $imageUrl=$directory.$imageName;
        $image->move($directory,$imageName);
        return $imageUrl;

    }
    public function userEdit($id){
        $this->admin=AdminUser::find($id);
        return view('admin.user.edit',[
            'users'=>$this->admin,
        ]);

    }
    public function userUpdate(Request $request){
//        dd($request->all());
        $this->admin=AdminUser::find($request->id);
        $this->admin->name  =    $request->name;
        $this->admin->email =    $request->email;
        if($request->file('image')){
            if($this->admin->image !=null ){
                unlink($this->admin->image );
            }
            $this->admin->image =    $this->saveImage($request);
        }
        $this->admin->save();
        return redirect(route('admin.manage'));

    }

    public function userDelete(Request $request ){
//        dd($request->all());
        $this->admin=AdminUser::find($request->id);
        $this->admin->delete();
        return back();
    }

}
