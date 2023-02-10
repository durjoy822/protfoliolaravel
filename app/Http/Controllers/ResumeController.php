<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Resume;

class ResumeController extends Controller
{
    public function resumeHome(){
        return view('admin.resume.home',[
            'resume'=>Resume::all(),
        ]);
    }
    public function resumeCreate(){
        return view('admin.resume.create');
    }
    public function resumeSave(Request $request){
//        dd($request->all());
        $this->resume=new Resume();
        $this->resume->heading      =$request->heading;
        $this->resume->year         =$request->year;
        $this->resume->department   =$request->department;
        $this->resume->institute    =$request->institute;
        $this->resume->details      =$request->details;
        $this->resume->save();
        return redirect(route('resume.home'));

    }
    public function resumeEdit($id){
        $this->resume=Resume::find($id);
        return view('admin.resume.edit',[
            'resume'=>$this->resume,
        ]);
    }

    public function resumeUpdate(Request $request){
//        dd($request->all());
        $this->resume=Resume::find($request->id);
        $this->resume->heading      =$request->heading;
        $this->resume->year         =$request->year;
        $this->resume->department   =$request->department;
        $this->resume->institute    =$request->institute;
        $this->resume->details      =$request->details;
        $this->resume->save();
        return redirect(route('resume.home'));


    }
    public  function resumeDelete(Request $request){
        $this->resume=Resume::find($request->id);
        $this->resume->delete();
        return redirect(route('resume.home'));

    }
}
