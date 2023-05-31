<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\order_details;
use App\Models\Orders;
use App\Models\eggs;
use App\Models\supplies;
use App\Models\sales_products; 

class BusinessOwenerController extends Controller
{
    public function show_production(){
               $egg_s=eggs::all();
               $midium = eggs::where('type', '=', 'midium')->sum('quantity');
               $large = eggs::where('type', '=', 'large')->sum('quantity');
               $xlarge = eggs::where('type', '=', 'xlarge')->sum('quantity');
               $jumbo = eggs::where('type', '=', 'jumbo')->sum('quantity');
               $egg_tot= eggs::where('lifetime', '<=', Carbon::now())->sum('quantity');
    return view('businessOwener.production_report_eggs')->with('egg_tot',$egg_tot)
    ->with('midium',$midium)
    ->with('large',$large)
    ->with('xlarge',$xlarge)
    ->with('jumbo',$jumbo)
    ->with('egg_s',$egg_s);
        // $weekly = Eggs::orderBy('created_at', 'desc')->take(6)->get();

        // return response()->json($weekly);
        // return redirect()->back();
    }
    public function show_population(){
         $product=products::all();
    $chickens = products::where('type', '=', 'chicken')->sum('quantity');
    $pullet = products::where('type', '=', 'pullet')->sum('quantity');
    $culle = products::where('type', '=', 'culle')->sum('quantity');
    $equi = products::where('type', '=', 'equipment')->sum('quantity');
    $egg_s = eggs::where('lifetime', '<=', Carbon::now())->sum('quantity');
    return view('businessOwener.population_report')->with('chickens',$chickens)
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
    return view('businessOwener.inventory_report')
    ->with('product',$product)
    ->with('egg_s',$egg_s)
    ->with('sales',$sales);
    }
     public function show()
    {
        $eggs = Eggs::orderBy('id', 'desc')->first();

        return view('admin.production', ['user' => Auth::user(), 'inv' => $eggs]);
    }

    // Load Chart Data

    public function prodStats()
    {
        $weekly = Eggs::orderBy('created_at', 'desc')->take(6)->get();

        
    } 

    public function ProdReport(request $request)
    {
        $eggs = Eggs::where('created_at', 'like', '%'.Carbon::now()->toDateString().'%')->get();
        $broken = BrokenEggs::where('created_at', 'like', '%'.Carbon::now()->toDateString().'%')->get();
        $reject = RejectEggs::where('created_at', 'like', '%'.Carbon::now()->toDateString().'%')->get();
        $returns = InventoryChanges::where('changed_at', 'like', '%'.Carbon::now()->toDateString().'%')->get()->where('remarks', '=', 'Returned Eggs.');
        $return = count($returns);
        $count = count($eggs);
        $countrjk = count($reject);


        view()->share('prodPDFeggs',$eggs);
        view()->share('prodPDFbroken',$broken);
        view()->share('prodPDFreject',$reject);
        view()->share('prodPDFcount',$count);
        view()->share('prodPDFcountrjk',$countrjk);
        view()->share('prodPDFreturn',$return);

        $pdf = PDF::loadView('admin/prodPDF'); 
        $pdf->setPaper('Legal', 'landscape');
        return $pdf->stream('prod/pdf.pdf');

        $prodPDFeggs=PDF::loadView('admin/prodPDF', compact('eggs'));
        return $prodPDFeggs->stream('prod/pdf.pdf');

        $prodPDFbroken=PDF::loadView('admin/prodPDF', compact('broken'));
        return $prodPDFbroken->stream('prod/pdf.pdf');

        $prodPDFreject=PDF::loadView('admin/prodPDF', compact('reject'));
        return $prodPDFreject->stream('prod/pdf.pdf');

        $prodPDFcount=PDF::loadView('admin/prodPDF', compact('count'));
        return $prodPDFcount->stream('prod/pdf.pdf');

        $prodPDFcountrjk=PDF::loadView('admin/prodPDF', compact('countrjk'));
        return $prodPDFcountrjk->stream('prod/pdf.pdf');

        $prodPDFreturn=PDF::loadView('admin/prodPDF', compact('return'));
        return $prodPDFreturn->stream('prod/pdf.pdf');




        // $data = Entry::find($id);
        // $pdf = PDF::loadView('posts.pdfview', compact('data'));
        // return $pdf->stream();
    }

    
    // // Generate Reports, highlight selection then press Ctrl+/ to remove/add comments

    // public function pdfview(Request $request, $id)
    // {
    //     $today = Carbon::now();
    //     $eggs = Eggs::where('created_at', '=', $today->toDateString())->get();

    //     view()->share('eggs', $eggs);

    //     $pdf=PDF::loadView('pdfview');
    //     return $pdf->stream('pdfview.pdf');
    // }

    

}

