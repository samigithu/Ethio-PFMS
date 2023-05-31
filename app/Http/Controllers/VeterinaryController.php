<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Products;
use App\Models\medicine;
use App\Models\disease;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class VeterinaryController extends Controller
{
 //treatement
public function show_treat(){
$diseas=disease::all();
$today=Carbon::now();
$medicines=medicine::where('expire_date','>=','$today')->get();
//Expire of Medicine
return view('veterinary.manage_treatement')->with('diseas',$diseas)
->with('medicines',$medicines);
}
public function add_treat(Request $request,$id){
$md_amount=$request->quantity;
$amount=medicine::where('name','=',$request->name)->value('quantity');  
$remain=$amount-$md_amount;  
$type=medicine::where('name','=',$request->name)->value('unit');
$med_id=medicine::where('name','=',$request->name)->value('id');
    $data=disease::find($id);
    $data->medicine=$request->name;
    $data->unit=$type;
    $data->quantity=$md_amount;
    $data->prescription=$request->prescription;
if($amount>$md_amount){
     $data->save();
     if($data==true){
        $data=medicine::find($med_id);
        $data->quantity=$remain;//save remain data of medicine
        $data->save();
     return redirect()->back()->with('message','Treatement Added sucessfully');
   }else{
        return redirect()->back()->with('error','Treatement is not added');
        }
   }else{
   return redirect()->back()->with('error','No souch Amount of medicine in store');
   }
}
//===============================================================//
//medicine
public function show_medicine(){
 $medicines=medicine::all();
 return view('veterinary.manage_allmedicine', compact('medicines'));
}
public function add_medicine(Request $request){
    $data=new medicine;
    $data->name=$request->name;
    $data->quantity=$request->quantity;
    $data->unit=$request->type;
    $data->price=$request->price;
    $data->expire_date=$request->expire_date;
    $data->added_by=Auth::user()->id.'-'.Auth::user()->userType;
 $data->save();
if($data==true){
   return redirect()->back()->with('message','Medicine added sucessfully');
}else{
    return redirect()->back()->with('error','Medicine is not added');
}
}   
public function update_medicine(Request $request,$id){
    $data=medicine::find($id);
    $data->name=$request->name;
    $data->quantity=$request->quantity;
    $data->unit=$request->type;
    $data->price=$request->price;
    $data->expire_date=$request->expire_date;
    $data->save();
if($data==true){
   return redirect()->back()->with('message','Medicine updated sucessfully');
}else{
    return redirect()->back()->with('error','Medicine is not updated');
}   
}

}
