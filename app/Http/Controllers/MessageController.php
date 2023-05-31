<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function send_message(){
$user=user::all();
$messages=message::where('receivers','=',Auth::user()->userType)->where('statues','=','Waiting')->get();//where.orWhere,whereNot
    $email=message::where('receivers','=',Auth::user()->userType)->where('statues','=','Waiting')->value('sender_email');
    $sender=user::where('email','=',$email)->get('profile_photo_path');
    return view('layout.contact_admins')
     ->with('messages',$messages)
    ->with('sender',$sender)
    ->with('user',$user);

}
      
public function add_message(Request $request){
//     $id=Auth::id();
// $user=user::find($id)
$data=new message;
$data->sender_id=Auth::user()->id;
$data->sender_email=Auth::user()->email;
$data->sender_phone=Auth::user()->phone;
$data->type=$request->message_type;
$data->subject=$request->subject;
$data->receivers=$request->to;
$data->message=$request->message;
 $data->save();
if($data==true){
  
   return redirect()->back()->with('message','Message sent Sucessfully');
}else{
    return redirect()->back()->with('error','Message not sent');
}
    }
    public function add_message_guest(Request $request){
//   $id=Auth::id();
// $user=user::find($id)
$data=new message;
$data->sender_id=$request->name;
$data->sender_email=$request->email;
$data->sender_phone='';
$data->type='Guest';
$data->subject=$request->subject;
$data->receivers='admin';
$data->message=$request->message;
 $data->save();
if($data==true){
  
   return redirect()->back()->with('message','Message sent Sucessfully');
}else{
    return redirect()->back()->with('error','Message not sent');
}
    }
    public function show_message(){
        $user=user::all();
$messages=message::where('receivers','=',Auth::user()->userType)->where('statues','=','Waiting')->get();//where.orWhere,whereNot
    $email=message::where('receivers','=',Auth::user()->userType)->where('statues','=','Waiting')->value('sender_email');
    $sender=user::where('email','=',$email)->get('profile_photo_path');
    return view('adminlite.manage__messages')
     ->with('messages',$messages)
    ->with('sender',$sender)
    ->with('user',$user);
    }
}
