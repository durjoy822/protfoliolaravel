<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function projectHome(){
        return view('admin.project.home',[
            'projects'=>Project::all(),
        ]);
    }
    public function projectCreate(){
        return view('admin.project.create');
    }
    public function projectSave( Request $request){
//        dd($request->all());
         $this->project=new Project();
         $this->project->details        =$request->details;
         $this->project->heading        =$request->heading;
         $this->project->section        =$request->section;
         $this->project->technology        =$request->technology;
        $this->project->project_details     =$request->project_details;
         $this->project->github_link        =$request->github_link;
         $this->project->server_link        =$request->server_link;
         $this->project->image          =$this->saveImage($request);
         $this->project->save();
         if($this->project->id){
             $request->Session()->put('project','project save successfull!');
             return redirect(route('project.home'));
         }else{
             $request->Session()->put('project','project save faild!');
             return redirect(route('project.create'));
         }

    }
        public function saveImage($request){
            $image=$request->file('image');
            $imageName=rand().'.'.$image->getClientOriginalExtension();
            $directory='admin/project/image/';
            $imageUrl=$directory.$imageName;
            $image->move($directory,$imageName);
            return $imageUrl;
        }
        public function projectEdit($id){
            $this->project=Project::find($id);
                return view('admin.project.edit',[
                    'project'=> $this->project,
                ]);
        }

        public function projectUpdate(Request $request){
            $this->project = Project::find($request->id);
            $this->project->details             =$request->details;
            $this->project->heading             =$request->heading;
            $this->project->section             =$request->section;
            $this->project->technology          =$request->technology;
            $this->project->project_details     =$request->project_details;
            $this->project->github_link         =$request->github_link;
            $this->project->server_link         =$request->server_link;
            if($request->file('image')){
                if($this->project->image !=null ){
                    unlink($this->project->image );
                }
                $this->project->image =    $this->saveImage($request);
            }
            $this->project->save();
            if($this->project->id){
                $request->Session()->put('project','project updated successfull!');
                return redirect(route('project.home'));
            }else{
                $request->Session()->put('project','project updated faild!');
                return redirect(route('project.edit'));
            }
        }
        public function projectDelete(Request $request){
            $this->project=Project::find( $request->id);
            $this->project->delete();
            return back();
        }
}
