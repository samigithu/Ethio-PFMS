<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Orders;


class OrdersController extends Controller
{
 public function show()
    {
      $ordersave = orders::all();

      return view('customer.order',compact('ordersave'));
    }
    // $orderid = '11-22-';
    //  $imagename=time().'.'.$image->getClientOriginalExtension();
  public function submit_order(Request $request){
  //   $ordersave=new orders;
  //   $data->cust_email=$request->email;
  //   $data->total_cost=$request->totall;
  //   if(Auth::id()){
  //   $data->user_id=Auth::user()->id;
  //   $data->order_id=$orderid.'-'.Auth::user()->id;
  //          }
  //   $data->handled_by='web';
  //   $data->orderPlaced='online';
  //   $data->receipt_photo_path=file->move('recietimage',$imagename);
  //   $data->trans_date=$orderid;
  //   $data->save();
  // return redirect()->back()->with('message','order Added Sucessfully');

  }
  public function my_order(){
    if(Auth::id()){
    $userid=Auth::user()->id;
    $order=orders::where('user_id',$userid)->get();
    return view('customer.my_order',compact('order'));
    }
    else{
        return redirect()->back();
    }
  }  
  public function cancel_order($id){
$data=orders::find($id);
$data->delete();
return redirect()->back();
  }
}
