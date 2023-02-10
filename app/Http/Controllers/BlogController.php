<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogHome()
    {
        return view('admin.blog.home',[
            'blogs'=>Blog::all(),
        ]);
    }

    public function blogCreate()
    {
        return view('admin.blog.create');
    }

    public function blogSave(Request $request)
    {
//        dd($request->all());
        $this->blog = new Blog();
        $this->blog->heading = $request->heading;
        $this->blog->content = $request->content;
        $this->blog->details = $request->details;
        $this->blog->date = $request->date;
        $this->blog->photo = $this->saveImage($request);
        $this->blog->save();
        return redirect(route('blog.home'));

    }

    public function saveImage($request)
    {
        $image = $request->file('photo');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $directory = 'admin/blog/image/';
        $imageUrl = $directory . $imageName;
        $image->move($directory, $imageName);
        return $imageUrl;
    }
    public function blogEdit($id){
        $this->blog=Blog::find($id);
        return view('admin.blog.edit',[
            'blog'=>$this->blog,
        ]);
    }
    public function blogUpdate(Request $request){
       $this->blog=Blog::find($request->id);
        $this->blog->heading = $request->heading;
        $this->blog->content = $request->content;
        $this->blog->details = $request->details;
        $this->blog->date = $request->date;
        if($request->file('photo')){
            if($this->blog->photo !=null ){
                unlink($this->blog->photo );
            }
            $this->blog->photo =    $this->saveImage($request);
        }
        $this->blog->save();
        return redirect(route('blog.home'));
    }
    public function blogDelete(Request $request){
        $this->blog=Blog::find($request->id);
        $this->blog->delete();
        return back();
    }

}
