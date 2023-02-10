<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public  function aboutHome(){
        return view('admin.about.home',[
            'abouts'=>About::all(),
        ]);
    }
    public  function aboutCreate(){
        return view('admin.about.create');
    }
    public  function aboutSave(Request $request){
//        dd($request->all());
        $this->about=new About();
        $this->about->details=$request->details;
        $this->about->name=$request->name;
        $this->about->birth_date=$request->birth_date;
        $this->about->address=$request->address;
        $this->about->zip=$request->zip;
        $this->about->email=$request->email;
        $this->about->phone=$request->phone;
        $this->about->web_site=$request->web_site;
        $this->about->save();
        return view(route('about.me'));

    }
    public function aboutEdit($id){
        $this->about=About::find($id);
        return view('admin.about.edit',[
            'abouts'=>$this->about,
        ]);
    }
    public function aboutUpdate(Request $request){
        $this->about=About::find($request->id);
        $this->about->details=$request->details;
        $this->about->name=$request->name;
        $this->about->birth_date=$request->birth_date;
        $this->about->address=$request->address;
        $this->about->zip=$request->zip;
        $this->about->email=$request->email;
        $this->about->phone=$request->phone;
        $this->about->web_site=$request->web_site;
        $this->about->save();
        return redirect(route('about.me'));
    }

    public function aboutDelete(Request $request){
        $this->about=About::find($request->id);
        $this->about->delete();
        return redirect(route('aboute.me'));
    }
}
