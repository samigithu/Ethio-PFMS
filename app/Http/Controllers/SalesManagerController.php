<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Products;
use App\Models\order_details;
use App\Models\Orders;
use App\Models\eggs;
use App\Models\supplies;
use App\Models\sales_products;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalesManagerController extends Controller
{
    //manage salle info
 public function show_sales()
    { 
       $sales=sales_products::all();
      $product=products::where('type','=','chicken')
      ->where('quantity','>','0')->get();
      $egg_s=eggs::where('lifetime','<=',carbon::now())
      ->where('quantity','>','0')->get();
    return view('salesManager.manage_sales')
    ->with('product',$product)
    ->with('egg_s',$egg_s)
    ->with('sales',$sales);
    }
    public function add_sale_chicken(Request $request){
        $sale_amount=$request->quantity;
        $chick_amount=products::where('batch_id','=',$request->PBID)->value('quantity');
        $remain=$chick_amount-$sale_amount;  
        $product_name=products::where('batch_id','=',$request->PBID)->value('name'); 
        $product_type=products::where('batch_id','=',$request->PBID)->value('type');
        $product_id=products::where('batch_id','=',$request->PBID)->value('id');    
$data=new sales_products; 
    $data->batch_id=$request->PBID;
    $data->name=$product_name;
    $data->type=$product_type;
    $data->quantity=$sale_amount;
    $data->statues=$request->quality;
    $data->retail_price=$request->price;
if($chick_amount>$sale_amount){
     $data->save();
      $sale_id=$data->id;
     if($data==true){
        $data=products::find($product_id);
        $data->quantity=$remain;//save remain data of chicken
        $data->remarks=$sale_amount.'-'.'selected_for_sale='.$sale_id;
        $data->save();
     return redirect()->back()->with('message','Sale Added sucessfully');
   }else{
        return redirect()->back()->with('error','Sale is not added');
        }
   }else{
   return redirect()->back()->with('error','No souch Amount of Chicken in store');
   }
    }
public function add_sale_egg(Request $request){
     $sale_amount=$request->quantity;
        $egg_amount=eggs::where('batch_id','=',$request->PBID)->value('quantity');
        $remain=$egg_amount-$sale_amount;   
        $egg_type=eggs::where('batch_id','=',$request->PBID)->value('type');
        $egg_id=eggs::where('batch_id','=',$request->PBID)->value('id');  
    $data=new sales_products; 
    $data->batch_id=$request->PBID;
    $data->name=$egg_type;
    $data->type='egg';
    $data->quantity=$sale_amount;
    $data->statues=$request->quality;
    $data->retail_price=$request->price;
    if($egg_amount>$sale_amount){
     $data->save();
      $sale_id=$data->id;
     if($data==true){
        $data=eggs::find($egg_id);
        $data->quantity=$remain;//save remain data of eggs
        $data->remarks=$sale_amount.'-'.'selected_for_sale='.$sale_id;
        $data->save();
     return redirect()->back()->with('message','Sale Added sucessfully');
   }else{
        return redirect()->back()->with('error','Sale is not added');
        }
   }else{
   return redirect()->back()->with('error','No souch Amount of eggs in store');
   }
}
public function uppdate_sale(Request $request,$id){
    $amount_Bef=sales_products::where('id','=',$id)->value('quantity');
    $amount_Curre=$request->quantity;
    $sale_type=sales_products::where('id','=',$id)->value('type');
//=================================egg update=================//    
if($sale_type=='egg'){
       $egg_amount=eggs::where('batch_id','=',$request->PBID)->value('quantity');  
        $egg_type=eggs::where('batch_id','=',$request->PBID)->value('type');
        $egg_id=eggs::where('batch_id','=',$request->PBID)->value('id');
   $data=sales_products::find($id);
   $data->batch_id=$request->PBID;
    $data->name=$egg_type;
    $data->type='egg';
    $data->statues=$request->quality;
    $data->quantity=$amount_Curre;
    $data->retail_price=$request->price;
if($egg_amount>$amount_Curre){
     $data->save();
      $sale_id=$data->id;
if($data==true){
        $data=eggs::find($egg_id);
//=====================roll back changes ===============/
        if($amount_Bef>$amount_Curre && $data->batch_id==$request->PBID){
        //if user insert value less than before
           $diff=$amount_Bef-$amount_Curre; //
           $remain=$diff+$egg_amount;
        $data->quantity=$remain;//save remain data of eggs to eggs table
        $data->remarks=$diff.'-'.'deselected_for_sale='.$sale_id;
        $data->save();
     return redirect()->back()->with('message','Sale Updated sucessfully');
     }elseif($amount_Bef<$amount_Curre && $data->batch_id==$request->PBID){
      //if user insert value greater than before
           $diff=$amount_Curre-$amount_Bef; //
           $remain=$egg_amount-$diff;
        $data->quantity=$remain;//save remain data of eggs to eggs table
        $data->remarks=$diff.'-'.'aditionalselected_for_sale='.$sale_id;
         $data->save();
     return redirect()->back()->with('message','Sale Updated sucessfully');
       }else{//if the new egg is selected
        $remain=$egg_amount-$amount_Curre;
        $data->quantity=$remain;//save remain data of eggs
        $data->remarks=$amount_Curre.'-'.'selected_for_sale='.$sale_id;
        $data->save();
         return redirect()->back()->with('message','Sale Added sucessfully');
       }
}else{
        return redirect()->back()->with('error','Sale is not updated');
        }
}else{
   return redirect()->back()->with('error','No souch Amount of eggs in store');
   }
 //=========================Chicken update===========//  
}elseif($sale_type=='chicken'){
     $chick_amount=products::where('batch_id','=',$request->PBID)->value('quantity');  
        $product_name=products::where('batch_id','=',$request->PBID)->value('name'); 
        $product_type=products::where('batch_id','=',$request->PBID)->value('type');
        $product_id=products::where('batch_id','=',$request->PBID)->value('id');  
$data=sales_products::find($id);
    $data->batch_id=$request->PBID;
    $data->name=$product_name;
    $data->type=$product_type;
    $data->quantity=$amount_Curre;
    $data->statues=$request->quality;
    $data->retail_price=$request->price;
if($chick_amount>$amount_Curre){
     $data->save();
      $sale_id=$data->id;
     if($data==true){
        $data=products::find($product_id);
       if($amount_Bef>$amount_Curre && $data->batch_id==$request->PBID){
        //if user insert value less than before
        $diff=$amount_Bef-$amount_Curre; //
        $remain=$diff+$chick_amount;
        $data->quantity=$remain;//save remain data of chickens to chickens table
        $data->remarks=$diff.'-'.'deselected_for_sale='.$sale_id;
        $data->save();
     return redirect()->back()->with('message','Sale Updated sucessfully');
     }elseif($amount_Bef<$amount_Curre && $data->batch_id==$request->PBID){
      //if user insert value greater than before
           $diff=$amount_Curre-$amount_Bef; //
           $remain=$chick_amount-$diff;
        $data->quantity=$remain;//save remain data of chickens to chickens table
        $data->remarks=$diff.'-'.'aditionalselected_for_sale='.$sale_id;
         $data->save();
     return redirect()->back()->with('message','Sale Updated sucessfully');
       }else{//if the new product is selected
        $remain=$chick_amount-$amount_Curre;
        $data->quantity=$remain;//save remain data of product
        $data->remarks=$amount_Curre.'-'.'selected_for_sale='.$sale_id;
        $data->save();
     return redirect()->back()->with('message','Sale Added sucessfully');
       }

   }else{
        return redirect()->back()->with('error','Sale is not updated');
        }
   }else{
   return redirect()->back()->with('error','No souch Amount of Chicken in store');
   }
}//====end of chicken update metheod
}
//+============================================================================================//
public function show_customers(){
    $customer=user::where('userType','=','customer')->get();
     $id=user::where('userType','=','customer')->value('id');
    $waiting=orders::where('user_id','=',$id)->where('status','=','In progress')->get();
    $approved=orders::where('user_id','=',$id)->where('status','=','Approved')->get();
    $rejected=orders::where('user_id','=',$id)->where('status','=','Rejected')->get();
    $allorder=orders::where('user_id','=',$id)->get();
    return view('salesManager.view_customers')->with('customer',$customer)
    ->with('waiting',$waiting)
    ->with('approved',$approved)
    ->with('rejected',$rejected)
     ->with('allorder',$allorder);
}
public function manage_order(){
     $orders=orders::where('status','=','In progress')->get();
     $sales=sales_products::all();
     $detail=order_details::all();
      return view('salesManager.manage_orders')->with('orders',$orders)->with('detail',$detail)->with('sales',$sales);
}
public function manage_approved_order(){
     $orders=orders::where('status','=','Approved')->get();
     $sales=sales_products::all();
     $detail=order_details::all();
      return view('salesManager.manage_orders_approved')->with('orders',$orders)->with('detail',$detail)->with('sales',$sales);
}
public function manage_rejected_order(){
    $orders=orders::where('status','=','Rejected')->get();
     $sales=sales_products::all();
     $detail=order_details::all();
      return view('salesManager.manage_orders_rejected')->with('orders',$orders)->with('detail',$detail)->with('sales',$sales);
}
public function approve_order(Request $request){
    $orderid=orders::where('id','=',$request->id)->value('order_id');
    $order=orders::find($request->id);
    $order->remarks=$request->remark;
    $order->status=$request->stat;
    $order->save();
    if($request->stat=="Approved"){
        $orderdetail=order_details::where('order_id','=',$orderid)->get();
        order_details::where('order_id','=',$orderid)->update(['statues'=>'served']);
         
    foreach($orderdetail as $orderdetails)
        {
        $orderquantity=$orderdetails->quantity;
    $sale_productquantity=sales_products::where('id','=',$orderdetails->product_id)->value('quantity');
            $result=$sale_productquantity-$orderquantity;
    sales_products::where('id','=',$orderdetails->product_id)->update(['quantity'=>$result,'remarks'=>$orderquantity.'soled']);
               
            }
            
        return redirect()->back()->with('message','Order Approved sucessfully');
    }elseif($request->stat=="Rejected")
        {
       order_details::where('order_id','=',$orderid)->update(['statues'=>'rejected']);
        return redirect()->back()->with('message','Order Rejected sucessfully');
    }
    return redirect()->back()->with('message','Information Added sucessfully');
}


}
