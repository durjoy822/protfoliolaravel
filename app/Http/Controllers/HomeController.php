<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use App\Models\Project;
use App\Models\Resume;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\AdminUser;
use App\Models\Slider;
use App\Models\About;
use App\Models\Skill;

class HomeController extends Controller
{
    public function home(){
        return view('frontend.home.home',[
            'sliders'=> Slider::all(),
            'abouts'=>  About::all(),
            'resume'=>  Resume::all(),
            'service'=> Service::all(),
            'skills'=>  Skill::all(),
            'projects'=>Project::all(),
            'blogs'=>   Blog::all(),
        ]);
    }
    public function admin_dashboard(){
        return view('admin.home.home',[
            'admins'=>AdminUser::all(),
        ]);
    }
    public function blogView(){
        return view('frontend.home.blog_view');

    }
    public function projectView($id){
        return view('frontend.home.project_view',[
           'project'=>Project::find($id),
            ]);

    }

}
