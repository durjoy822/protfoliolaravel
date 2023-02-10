<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function serviceHome(){
        return view('admin.service.home',[
            'services'=>Service::all(),
        ]);
    }
    public function serviceCreate(){
        return view('admin.service.create');
    }
    public function serviceSave(Request $request){
//        dd($request->all());
        $this->service=new Service();
        $this->service->heading=$request->heading;
        $this->service->service=$request->service;
        $this->service->icone=$request->icone;
        $this->service->save();
        return redirect(route('service.home'));

    }
    public function serviceEdit($id){
        $this->servie=Service::find($id);
        return view('admin.service.edit',[
            'servie'=>$this->servie,
        ]);
    }
    public function serviceUpdate(Request $request){
//        dd($request->all());
        $this->service=Service::find($request->id);
        $this->service->heading=$request->heading;
        $this->service->service=$request->service;
        $this->service->icone=$request->icone;
        $this->service->save();
        return redirect(route('service.home'));
    }

    public function serviceDelete(Request $request){
        $this->service=Service::find($request->id);
        $this->service->delete();
        return redirect(route('service.home'));
    }

}
