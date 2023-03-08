<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function messageIndex(){
        return view('admin.message.index',[
            'messages'=>Message::all(),
        ]);
    }
    public function messageStore(Request $request){
//        dd($request->all());
        $request->validate(
            [
                'name'  => 'required',
                'email'  => 'required',

            ],
            [
                'name.required' => 'Name is Required',
                'email.required' => 'email is Required',
            ]
        );
        $message=new Message();
        $message->name=$request->name;
        $message->email=$request->email;
        $message->subject=$request->subject;
        $message->message=$request->message;
        $message->save();
        return redirect()->back();
    }

    public function messageDelete(Request $request){
        $message=Message::find($request->id);
        $message->delete();
        return back();
    }
}
