<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function newUser(Request $request){
//        dd($request->all());
        $this->max=new User();
        $this->max->name=$request->name;
        $this->max->email=$request->email;
        $this->max->password= bcrypt($request->password) ;
        $this->max->save();
        return redirect(route('login'));
    }
}
