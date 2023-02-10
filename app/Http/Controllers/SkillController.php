<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Session;

class SkillController extends Controller
{
    public function skillHome(){
        return view('admin.skill.home',[
            'skills'=>Skill::all(),
        ]);
    }
    public function skillCreate(){
        return view('admin.skill.create');
    }
    public function skillSave(Request $request){
//        dd($request->all());
        $this->skill=   new Skill();
        $this->skill->heading       =   $request->heading;
        $this->skill->name          =   $request->name;
        $this->skill->percentage    =   $request->percentage;
        $this->skill->save();
        if($this->skill->id){
            $request->Session()->put('skill','skill % save successfull!');
            return redirect(route('skill.home'));
        }else{
            $request->Session()->put('skill','skill % successfully save failed!');
            return redirect(route('skill.create'));
        }
    }
    public function skillEdit($id){
        $this->skill=Skill::find($id);
        return view('admin.skill.edit',[
            'skills'=>$this->skill,
        ]);

    }
    public function skillUpdate(Request $request){
//        dd($request->all());
        $this->skill=Skill::find($request->id);
        $this->skill->heading       =   $request->heading;
        $this->skill->name          =   $request->name;
        $this->skill->percentage    =   $request->percentage;
        $this->skill->update();
        if($this->skill->id){
            $request->Session()->put('skill','post update successfull!');
            return redirect(route('skill.home'));
        }else{
            $request->Session()->put('skill','post update faild!');
            return  redirect('skill.edit');
        }

    }
    public function skillDelete(Request $request){
        $this->skill=Skill::find($request->id);
        $this->skill->delete();
        if($this->skill->id){
            $request->Session()->put('skill','post Deleted successfull!');
            return redirect(route('skill.home'));
        }else{
            $request->Session()->put('skill','post Deleted faild!');
            return  redirect(route('skill.home'));
        }
//        return back();

    }
}
