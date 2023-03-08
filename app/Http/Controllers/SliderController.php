<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public  function sliderHome(){
        return view('admin.slider.home',[
            'sliders'=>Slider::all(),
        ]);
    }
    public  function sliderCreate(){
        return view('admin.slider.create');
    }
    public function sliderSave( Request $request){
         $this->slider= new Slider();
         $this->slider->heading = $request->heading;
         $this->slider->content = $request->content;
         $this->slider->details = $request->details;
         $this->slider->image   = $this->saveImage($request);
         $this->slider->save();
         return redirect(route('slider.home'));

    }

    public function saveImage($request){
        $image=$request->file('image');
        $imageName=rand().'.'.$image->getClientOriginalExtension();
        $directory='admin/slidimage/image/';
        $imageUrl=$directory.$imageName;
        $image->move($directory,$imageName);
        return $imageUrl;
    }
    public function sliderEdit($id){
        $this->slider=Slider::find($id);
        return view('admin.slider.edit',[
            'sliders'=>$this->slider,
        ]);
    }
    public function sliderUpdate(Request $request)
    {
        $this->slider = Slider::find($request->id);
        $this->slider->heading = $request->heading;
        $this->slider->content = $request->content;
        $this->slider->details = $request->details;
        if($request->file('image')){
            if($this->slider->image !=null ){
                unlink($this->slider->image );
            }
            $this->slider->image =    $this->saveImage($request);
        }
        $this->slider->save();
        return redirect(route('slider.home'));

    }

    public function sliderDelete(Request $request){
         $this->slider=Slider::find($request->id);
        if($this->slider->image !=null ){
            unlink($this->slider->image );
        }
         $this->slider->delete();
         return redirect(route('slider.home'));
    }









}
