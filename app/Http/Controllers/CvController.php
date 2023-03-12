<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Stroage;


class CvController extends Controller
{
    public function cvIndex(){
        return view('admin.cv.index',[
            'cvs'=>Cv::all(),
        ]);
    }
    public function cvUpload(Request $request){
//        dd($request->all());
        $cv=new Cv();
        $cv->cv=$this->saveCv($request);
        $cv->save();
        return back();
    }

    public function saveCv($request){
        $image =$request->file('cv');
//        $imageName=rand().'.'.$image->extension();
        $imageName=rand().'.'.$image->getClientOriginalExtension();
        $directory='admin/Cv/';
        $imageUrl=$directory.$imageName;
        $image->move($directory,$imageName);
        return $imageUrl;

    }
    public function cvDownload(Request $request,$id){
//        dd($request->all());
        $cv_uploads=DB::table('cvs')->where('id',$id)->first();
        $pathToFile=public_path('admin/Cv/',"$cv_uploads");
        return response::download($pathToFile);
    }
    public function cvDelete(Request $request){
        $cv=Cv::find($request->id);
        if ($cv->cv !=null){
            unlink($cv->cv);
        }
        $cv->delete();
        return back();
    }
}
