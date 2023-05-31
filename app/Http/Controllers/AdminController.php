<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Products;
use App\Models\order_details;
use App\Models\Orders;
use App\Models\eggs;
use App\Models\supplies;
use App\Models\sales_products; 

class AdminController extends Controller
{
    public function addview(){
    $user=user::all();
    return view('adminlite.manage_user',compact('user'));
    }
public function customers(){
     $user=user::where('userType','=','customer')->get();
    return view('adminlite.customers',compact('user'));
}
public function admins(){
   $user=user::where('userType','!=','customer')->get();
    return view('adminlite.admins',compact('user'));
}
public function upload(Request $request){
        $user=new user;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('userimage',$imagename);
        $user->profile_photo_path=$imagename;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->number;
        $user->address=$request->address;
        $user->userType=$request->role;
        $user->password= bcrypt("123456789");
        $user->save();
        if($user==true){
        return redirect()->back()->with('message','User Added Sucessfully');
}else{
    return redirect()->back()->with('error','User is not added');
}   
    
}
 public function edit_user(Request $request,$id){
    $user=user::find($id);
    $user->name=$request->name;
     $user->email=$request->email;
      $user->phone=$request->phone;
       $user->address=$request->address;
       $user->userType=$request->role;
       $user->statues=$request->statues;
        $image=$request->profile_image;
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->profile_image->move('userimage',$imagename);
        $user->profile_photo_path=$imagename;
    }
    $user->save();
if($user==true){
   return redirect()->back()->with('message','User updated Sucessfully');
}else{
    return redirect()->back()->with('error','User is not Updated');
}   

}
public function deactivate_user(Request $request,$id){
$data=user::find($id);
$data->statues='Disabled';
$data->save();
if($data==true){
        
        return redirect()->back()->with('message','User  Deactivated');
}else{
       return redirect()->back()->with('error','User is not Disabled');
}   

}

   public function show_production(){
               $egg_s=eggs::all();
               $midium = eggs::where('type', '=', 'midium')->sum('quantity');
               $large = eggs::where('type', '=', 'large')->sum('quantity');
               $xlarge = eggs::where('type', '=', 'xlarge')->sum('quantity');
               $jumbo = eggs::where('type', '=', 'jumbo')->sum('quantity');
               $egg_tot= eggs::where('lifetime', '<=', Carbon::now())->sum('quantity');
    return view('adminlite.production_report_eggs')->with('egg_tot',$egg_tot)
    ->with('midium',$midium)
    ->with('large',$large)
    ->with('xlarge',$xlarge)
    ->with('jumbo',$jumbo)
    ->with('egg_s',$egg_s);
       
    }
    public function show_population(){
         $product=products::all();
    $chickens = products::where('type', '=', 'chicken')->sum('quantity');
    $pullet = products::where('type', '=', 'pullet')->sum('quantity');
    $culle = products::where('type', '=', 'culle')->sum('quantity');
    $equi = products::where('type', '=', 'equipment')->sum('quantity');
    $egg_s = eggs::where('lifetime', '<=', Carbon::now())->sum('quantity');
    return view('adminlite.population_report')->with('chickens',$chickens)
    ->with('pullet',$pullet)
    ->with('product',$product)
    ->with('culle',$culle)
    ->with('equi',$equi)
    ->with('egg_s',$egg_s);
    }
    public function show_iventory(){
     $sales=sales_products::all();
      $product=products::where('type','=','chicken')
      ->where('quantity','>','0')->get();
      $egg_s=eggs::where('lifetime','<=',carbon::now())
      ->where('quantity','>','0')->get();
    return view('adminlite.inventory_report')
    ->with('product',$product)
    ->with('egg_s',$egg_s)
    ->with('sales',$sales);
    }

}



