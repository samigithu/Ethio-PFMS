<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Redirect;
use App\Models\User;
use App\Models\Orders;
use App\Models\order_details;
use App\Models\sales_products;
use Request;
use Carbon\Carbon;
use Illuminate\Http\Request as HttpRequest;
class CustomerController extends Controller
{

    public function manage_my_order(){
    if(Auth::id()){
    $userid=Auth::user()->id;
    $orders=orders::where('user_id',$userid)->get();
       if (Request::isMethod('post')) {
        $info=orders::where('id',
            '=',Request::get('id'))->where('status','=','In progress')->get();
        if(Request::get('remark')!= null && $info==true ){
             $data=Orders::find(Request::get('id'));
            $data->remarks=Request::get('remark');
            $data->save();
            return redirect()->back()->with('message','Info added sucessfully');
        }
         if(Request::get('file')!= null && $info==true ){
            $image=Request::get('file');
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $image->move('recietimage',$imagename); 
            $data=new Orders;
            $data->receipt_photo_path=$imagename;
            $data->save();
            return redirect()->back()->with('message','Info added sucessfully');
         }
    }
   
    return view('customer.manage_my_order',compact('orders'));
    }
  }
    public function make_order(){
     $sales=sales_products::all();
      // return view('customer.customer_make_order',['sales' => $sales]);
    if (Request::isMethod('post')) 
        {
        $product_id = Request::get('product_id');
        $qty = Request::get('quantity');
        $product = sales_products::find($product_id);
        \Cart::add(array('id' => $product_id, 'name' => $product->name, 'quantity' => $qty, 'price' => $product->retail_price));
       }
        $cart =\Cart::getContent();
        return view('customer.customer_make_order',['sales' => $sales], array('cart' => $cart));
         
         }
         //Show cart in checkout

     public function cart()
    {
        $cart = \Cart::getContent();
return view('customer.customer_cheakout',array('cart' => $cart, 'customer' => Auth::user()->userType=='customer'));

    }

    //Remove item in cart

    public function remove()
    {
        $sales = sales_products::all();

        if (Request::get('product_id'))
        {
           \Cart::remove(Request::get('product_id'));
        }

        $cart = \Cart::getContent();

        return redirect()->back()->with('message','item removed sucessfully');

    }

  public function reserve_order(HttpRequest $request)  { 

        $getid = Orders::count();

        if ($getid == null || $getid == '' || $getid == '0')
            $getid = '1';
        else
            $getid++;
    $orderid ='11-22-'.Carbon::now().'-'.Auth::user()->id;
    $image=$request->file;
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $image->move('recietimage',$imagename);
    $data=new orders;
    $data->cust_email=Auth::user()->email;
    $data->total_cost=$request->totall;
    if(Auth::id()){
    $data->user_id=Auth::user()->id;
    $data->order_id=$orderid.'-'. $getid;
           }
    $data->handled_by='web';
    $data->order_placed='online';
    $data->receipt_photo_path=$imagename;
    $data->trans_date=Carbon::now();
    $data->save();
      $order = \Cart::getcontent();

        foreach ($order as $item)
        {
            $confirm = new order_details();

            $confirm->order_id = $orderid.'-'. $getid;
            $confirm->product_name = $item->name;
            $confirm->quantity = $item->quantity;
            $confirm->unit_price = $item->price;
            $confirm->product_id=$item->id;
            $confirm->save();
        }
        \Cart::clear();
  return redirect('/manage_my_orders')->with('message','order Reserved Sucessfully');
}


}
