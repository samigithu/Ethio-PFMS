<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\eggs;
use App\Models\Message;
use App\Models\Products;
use App\Models\orders;
use App\Models\order_details;
use App\Models\medicine;
use Carbon\Carbon;

class HomeController extends Controller
{

 public function index(){
    if(Auth::id()){
  return redirect('home');
    }else{
        $user=user::all();
    $chickens = products::where('type', '=', 'chicken')->sum('quantity');
    $eggs = eggs::where('lifetime', '<', Carbon::now())->sum('quantity');
    return view('index')->with('chickens',$chickens)->with('eggs',$eggs)->with('user',$user);
  }
}

 public function redirect(){
        if(Auth::id()){
if(Auth::user()->userType=='customer' && Auth::user()->statues=='Active' ){
    return view('customer.customer_home');
   /*  $user=user::all();
     $orders=orders::all();
     $order_det=order_details::all();
     return view('index')->with('user',$user)
    ->with('order_detail',$order_det)
 ->with('orders',$orders);
    return view('index')->with('user',$user)
->with('orders',$order); */
}
if(Auth::user()->userType=='admin' && Auth::user()->statues=='Active'){
      if(Auth::id()){
    $userid=Auth::user()->id;
    $messages=message::where('receivers','=','admin')->where('statues','=','Waiting')->get();//where.orWhere,whereNot
    $email=message::where('receivers','=','admin')->where('statues','=','Waiting')->value('sender_email');
    $sender=user::where('email','=',$email)->get('profile_photo_path');
    $users=user::where('userType','!=',null)->get();
    $customers=user::where('userType','=','customer')->get();
    $customersd=user::where('userType','=','customer')->where('statues','=','Disabled')->get();
    $myadmin=user::where('id',$userid)->get();
    // ??/??????"?""""
     $chickens = products::where('type', '=', 'chicken')->sum('quantity');
    $pullet = products::where('type', '=', 'pullet')->sum('quantity');
    $medicines = medicine::all()->sum('quantity');
    $culle = products::where('type', '=', 'culle')->sum('quantity');
    $equi = products::where('type', '=', 'equipment')->sum('quantity');
    $customers = user::where('userType','=','customer')->where('statues','=','Active')->get();
    $eggs = eggs::where('lifetime', '<', Carbon::now())->sum('quantity');
    $order = orders::where('status','=','Approved')->sum('total_cost');
    $chick = products::where('type', '=', 'chicken')->get();
    $chicken_x_axis = [];
    $chicken_y_axis = [];

    foreach ($chick as  $rows) {
        $chicken_x_axis[] = $rows['created_at']->format('F:d');
        $chicken_y_axis[] = $rows['quantity'];
    }
    $eggpro=eggs::all();
    $timestamps_x_axis = [];
    $rssi_y_axis = [];
    foreach ($eggpro as  $row) {
        $timestamps_x_axis[] = $row['created_at']->format('F:d');
        $rssi_y_axis[] = $row['quantity'];
    }
    $orderapp = orders::where('status','=','Approved')->get();
    $orderdis = orders::where('status','=','Rejected')->get();
    $orderin = orders::where('status','=','In progress')->get();
    $orderapp_x_axis= [];
    $orderapp_y_axis = [];
    $orderdis_x_axis = [];
    $orderdis_y_axis = [];
    $orderin_x_axis =[];
    $orderin_y_axis = [];
     foreach ($orderapp as  $row) {
        $orderapp_x_axis[] = $row['created_at']->format('F:d');
        $orderapp_y_axis[] = $row['total_cost'];
    }
    foreach ($orderdis as  $row) {
        $orderdis_x_axis[] = $row['created_at']->format('F:d');
        $orderdis_y_axis[] = $row['total_cost'];
    }
    foreach ($orderin as  $row) {
        $orderin_x_axis[] = $row['created_at']->format('F:d');
        $orderin_y_axis[] = $row['total_cost'];
  }
    return view('adminlite.admin_home')->with('chickens',$chickens)
    ->with('pullet',$pullet)
    ->with('medicines',$medicines)
    ->with('culle',$culle)
    ->with('equi',$equi)
    ->with('customers',$customers)
    ->with('order',$order)
    ->with('eggs',$eggs)
    ->with('labels_chicken', $chicken_x_axis)
    ->with('data_chicken', $chicken_y_axis)
    ->with('labels_egg', $timestamps_x_axis)
    ->with('data_egg', $rssi_y_axis)
     ->with('labels_orderin', $orderin_x_axis)
    ->with('data_orderin', $orderin_y_axis)
     ->with('labels_orderapp', $orderapp_x_axis)
    ->with('data_orderapp', $orderapp_y_axis)
     ->with('labels_orderdis', $orderdis_x_axis)
    ->with('data_orderdis', $orderdis_y_axis)
    ->with('myadmin',$myadmin)
    ->with('messages',$messages)
    ->with('sender',$sender)
    ->with('users',$users)
     ->with('customers',$customers)
     ->with('customersd',$customersd);

}
}
if(Auth::user()->userType=='farmHandler' && Auth::user()->statues=='Active'){
    return view('farmHandler.farmHa_home');
}
if(Auth::user()->userType=='veterinary' && Auth::user()->statues=='Active'){
    return view('veterinary.vet_home');
}if(Auth::user()->userType=='businessOwener' && Auth::user()->statues=='Active'){
    $chickens = products::where('type', '=', 'chicken')->sum('quantity');
    $pullet = products::where('type', '=', 'pullet')->sum('quantity');
    $medicines = medicine::all()->sum('quantity');
    $culle = products::where('type', '=', 'culle')->sum('quantity');
    $equi = products::where('type', '=', 'equipment')->sum('quantity');
    $customers = user::where('userType','=','customer')->where('statues','=','Active')->get();
    $eggs = eggs::where('lifetime', '<', Carbon::now())->sum('quantity');
    $order = orders::where('status','=','Approved')->sum('total_cost');
    $chick = products::where('type', '=', 'chicken')->get();
    $chicken_x_axis = [];
    $chicken_y_axis = [];

    foreach ($chick as  $rows) {
        $chicken_x_axis[] = $rows['created_at']->format('F:d');
        $chicken_y_axis[] = $rows['quantity'];
    }
    $eggpro=eggs::all();
    $timestamps_x_axis = [];
    $rssi_y_axis = [];
    foreach ($eggpro as  $row) {
        $timestamps_x_axis[] = $row['created_at']->format('F:d');
        $rssi_y_axis[] = $row['quantity'];
    }
    $orderapp = orders::where('status','=','Approved')->get();
    $orderdis = orders::where('status','=','Rejected')->get();
    $orderin = orders::where('status','=','In progress')->get();
    $orderapp_x_axis= [];
    $orderapp_y_axis = [];
    $orderdis_x_axis = [];
    $orderdis_y_axis = [];
    $orderin_x_axis =[];
    $orderin_y_axis = [];
     foreach ($orderapp as  $row) {
        $orderapp_x_axis[] = $row['created_at']->format('F:d');
        $orderapp_y_axis[] = $row['total_cost'];
    }
    foreach ($orderdis as  $row) {
        $orderdis_x_axis[] = $row['created_at']->format('F:d');
        $orderdis_y_axis[] = $row['total_cost'];
    }
    foreach ($orderin as  $row) {
        $orderin_x_axis[] = $row['created_at']->format('F:d');
        $orderin_y_axis[] = $row['total_cost'];
  }
    return view('businessOwener.busOwen_home')->with('chickens',$chickens)
    ->with('pullet',$pullet)
    ->with('medicines',$medicines)
    ->with('culle',$culle)
    ->with('equi',$equi)
    ->with('customers',$customers)
    ->with('order',$order)
    ->with('eggs',$eggs)
    ->with('labels_chicken', $chicken_x_axis)
    ->with('data_chicken', $chicken_y_axis)
    ->with('labels_egg', $timestamps_x_axis)
    ->with('data_egg', $rssi_y_axis)
     ->with('labels_orderin', $orderin_x_axis)
    ->with('data_orderin', $orderin_y_axis)
     ->with('labels_orderapp', $orderapp_x_axis)
    ->with('data_orderapp', $orderapp_y_axis)
     ->with('labels_orderdis', $orderdis_x_axis)
    ->with('data_orderdis', $orderdis_y_axis);
}if(Auth::user()->userType=='saleManager' && Auth::user()->statues=='Active'){
    return view('salesManager.saleMa_home');
    
}
else
{
    return view('dashboard');//redirect
}


}
else{

            return redirect()->back();//redirect to register
        }
    }

}
