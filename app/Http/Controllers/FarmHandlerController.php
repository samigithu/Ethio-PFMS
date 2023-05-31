<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Products;
use App\Models\feeds;
use App\Models\disease;
use App\Models\eggs;
use App\Models\supplies;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FarmHandlerController extends Controller
{
   //products
 public function show_product()
    { 
       $product=products::all();
    return view('farmHandler.manage_products',compact('product'));
    }
 public function add_product(Request $request){

$data =new products;
$data->batch_id=Carbon::now()->format('Ymd') .'-'.Auth::user()->id . '-' . Carbon::now()->toTimeString() ;
$data->name=$request->name;
$data->quantity=$request->quantity;
$data->type=$request->type;
$data->added_by=Auth::user()->id.'-'.Auth::user()->userType;
$data->save();
if($data==true){
   return redirect()->back()->with('message','product added sucessfully');
}else{
    return redirect()->back()->with('error','product is not added');
}   
    }
    public function update_product(Request $request, $id){
        $product=products::find($id);
        $product->name=$request->name;
        $product->quantity=$request->quantity;
        $product->type=$request->type;
        $product->save();
if($product==true){
   return redirect()->back()->with('message','product Updated sucessfully');
}else{
    return redirect()->back()->with('error','product is not updated');
}   
    }
//==============================================================//
    //eggs
    public function show_product_egg()
    { 
     $egg_s=eggs::all();
    return view('farmHandler.manage_product_eggs',compact('egg_s'));
    }
public function add_product_egg(Request $request ){
$data= new eggs;
$data->batch_id=Carbon::now()->format('Ymd') .'-'.Auth::user()->id . '-' . Carbon::now()->toTimeString() ; 
$data->lifetime=Carbon::now()->addDays(7);
$data->quantity=$request->quantity;
$data->type=$request->type;
$data->added_by=Auth::user()->id.'-'.Auth::user()->userType;
$data->save();
if($data==true){
   return redirect()->back()->with('message','egg added sucessfully');
}else{
    return redirect()->back()->with('error','egg is not added');
}   
}
public function update_product_egg(Request $request, $id)
{
    $data=eggs::find($id);
    $data->quantity=$request->quantity;
    $data->type=$request->type;
    $data->save();
if($data==true){
   return redirect()->back()->with('message','egg updated sucessfully');
}else{
    return redirect()->back()->with('error','egg is not updated');
}   
}
//==============================================================//
//supplies
public function show_supplies(){
    $suplie=supplies::all();
    return view('farmHandler.manage_supplies', compact('suplie'));
}
public function add_supplie(Request $request){
    $data=new supplies;
    $data->name=$request->name;
    $data->quantity=$request->quantity;
    $data->unit=$request->type;
    $data->price=$request->price;
    $data->added_by=Auth::user()->id.'-'.Auth::user()->userType;
 $data->save();
if($data==true){
   return redirect()->back()->with('message','Supplie added sucessfully');
}else{
    return redirect()->back()->with('error','Supplie is not added');
}   
}
public function update_supplie(Request $request,$id){
    $data=supplies::find($id);
    $data->name=$request->name;
    $data->quantity=$request->quantity;
    $data->unit=$request->type;
    $data->price=$request->price;
    $data->save();
if($data==true){
   return redirect()->back()->with('message','Supplie updated sucessfully');
}else{
    return redirect()->back()->with('error','Supplie is not updated');
}   
}
//==============================================================//
//feeds
public function show_feeds(){
    $feed=feeds::all();
   return view('farmHandler.manage_feeds',compact('feed'));
}
public function add_feed(Request $request){
    $data=new feeds;
    $data->name='Feed'.'-'.$request->name;
    $data->quantity=$request->quantity;
    $data->unit=$request->type;
    $data->price=$request->price;
    $data->lifetime=Carbon::now()->addDays(7);
    $data->added_by=Auth::user()->id.'-'.Auth::user()->userType;
 $data->save();
if($data==true){
   return redirect()->back()->with('message','Feed added sucessfully');
}else{
    return redirect()->back()->with('error','Feed is not added');
}   
}
public function update_feed(Request $request, $id){
    $data=feeds::find($id);
    $data->name=$request->name;
    $data->quantity=$request->quantity;
    $data->unit=$request->type;
    $data->price=$request->price;
    $data->save();
if($data==true){
   return redirect()->back()->with('message','Feed updated sucessfully');
}else{
    return redirect()->back()->with('error','Feed is not updated');
}   
}
//==============================================================//
//disease
public function show_disease(){
$diseas=disease::all();
$product=products::where('type','=','chicken')->get();
return view('farmHandler.manage_disease')->with('diseas',$diseas)
->with('product',$product);
}
public function add_diseas(Request $request){
    $id=$request->cbid;
    $product=products::where('batch_id','=',$id)->value('name');
    $data=new disease;
    $data->batch_id=$id;
    $data->batch_name=$product;
    $data->symptom=$request->symptom;
    $data->infection_date=$request->infection_date;
    $data->added_by=Auth::user()->id.'-'.Auth::user()->userType;
    $data->save();
if($data==true){
   return redirect()->back()->with('message','Disease added sucessfully');
}else{
    return redirect()->back()->with('error','Disease is not added');
}
}
public function update_diseas(Request $request,$id){
    $data=disease::find($id);
    $id=$request->cbid;
    $product=products::where('batch_id','=',$id)->value('name');
    $data->batch_id=$request->cbid;
    $data->batch_name=$product;
    $data->symptom=$request->symptom;
    $data->infection_date=$request->infection_date;
 $data->save();
if($data==true){
   return redirect()->back()->with('message','Disease updated sucessfully');
}else{
    return redirect()->back()->with('error','Disease is not updated');
}
}
//==============================================================//

}
 // $life = Carbon::now();
 //  $life->addDays(7);
