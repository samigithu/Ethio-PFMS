 @include('layout.headd')
@if(Auth::id() && Auth::user()->userType=='customer' && Auth::user()->statues=='Active')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Make Order</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Make Order</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
 <!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-header">
                <h3 class="card-title" style="float: left;">
                  
                </h3>
                <h3 class="card-title" style="float: right;">
                </h3>
              </div>
              <div class="card-body" style="background-color:#E7BA31;">
             <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                   <th>ID</th>
                   <th>Product Type</th>
                   <th>Product Quality</th>
                    <th>Product Quantity </th>
                    <th>Retail Price</th>
                    <th>Amount</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                   <tbody>
                    @foreach($sales as $sale)
                    <tr>
                      <td>{{$sale->id}}</td>
                      @if($sale->type=='egg')
                      <td>{{$sale->name}}-{{$sale->type}}</td>
                      @else
                      <td>{{$sale->type}}</td>
                      @endif
                      <td>{{$sale->statues}}</td>
                      <td>{{$sale->quantity}}</td>
                      <td>{{$sale->retail_price}} Birr</td>
                      <form method="POST" action="/make_orders"><input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="product_id" value="{{$sale->id}}">
                      <td><input type="number" class="form-control" name="quantity" placeholder="quntity" min="1" max="{{$sale->quantity}}" required=""></td>
                     <td style="width: 20%">
                     	<button type="submit" class="btn btn-primary ">
		                 <i class="fa fa-shopping-cart"></i>
		                    		Add to cart
		               			</button></td>  
                        </form>              
                      </tr>
                     
                      @endforeach
                    </tbody>
                </table> 
            <!-- +++++++++++++++++++++++++++++++++ -->
            <!-- solid sales graph -->
            <div class="card bg-gradient-info ">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                     +++++   Selected Items ++++
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body" style="background-color:#E7BA31;">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                <tr>
                    <th colspan="5"><center><h4>Cart</h4></center></th>
                </tr>
                
                    <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th>Action</th>
                </tr>
  </thead>
  <tbody>
                @if($cart->isEmpty())
                    
                    <tr>
                        <td colspan="5"><center><b>Cart empty.</b></center></td>
                    </tr>

                @else
            @foreach($cart as $item)
                    <tr>
                        <td class="cart_description">
                            <p>{{$item->name}}</p>
                        </td>
                        <td class="cart_price">
                            <p>{{$item->price}}.00 Birr</p>
                        </td>
                        <td class="cart_quantity">
                            <p>{{$item->quantity}}</p>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price" id="subtotal">Total:{{$item->price*$item->quantity}}.00 Birr
                            </p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href='{{url("make_orders/remove?product_id=$item->id")}}'><i class="fa fa-times" style="color: red" title="remove item"></i></a>
                        </td>
                    </tr>
                @endforeach
              <td colspan="5">  
            <center>
                <form method="POST" action="/checkout">
                    <input type="hidden" name="product_id" value="{{$sale->id}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>
                        Checkout
                    </button>
                </form>
            </center>
              </td>
                @endif
                    </tbody>
                </table> 
              </div>
              <!-- /.card-body -->
              <!--////////////////////// line Graph values  -->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">Mail-Orders</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">In-Store</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
              @if(session()->has('message'))
    <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
       {{'Successfull Delation'}}
    </h3>
    <p> {{session()->get('message')}}
</p>
    <p>
     @php echo "<script>setTimeout(\"location.href = '../make_orders';\",1500);</script>"; @endphp
   
    </p>
  </div>
</div>
 @elseif(session()->has('error'))
 <div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      {{'Error'}} 
    </h3>
    <p>{{session()->get('error')}}</p>
    <p>
       <a href="../make_orders"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div>
 @endif 
         
              </div>
            </div>
          </div>
        </div>
      </div>
</section>   
</div>
@endif
@include('layout.footer')