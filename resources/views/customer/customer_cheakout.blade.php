 @include('layout.headd')
 @if(Auth::id() && Auth::user()->userType=='customer' && Auth::user()->statues=='Active')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Submit Order</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Submit Order</li>
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
                <h3 class="card-title" style="float: right;">
                  </h3>
              </div>
              <div class="card-body" style="background-color:#E7BA31;">
             <table id="example1" class="table table-bordered table-hover">
                 <thead>             	
                  <tr>
      <th >Product</th>
      <th >Price</th>
      <th >Quantity</th>
      <th >Subtotal</th>
                  </tr>
                  </thead>
                   <tbody>
                    @foreach($cart as $item)
                    <tr>
            <td>{{$item->name}}</td>       
            <td>{{$item->price}} Birr</td>
            <td>{{$item->quantity}}</td>
            <td>{{$item->price*$item->quantity}}.00 Birr</td>
            </tr>
                      @endforeach
             <tr>
                 
                 <td>Our Account:<b>&nbsp;&nbsp;100229291018 &nbsp;&nbsp;||&nbsp;&nbsp;ETHIO-CHIKENS</b></td>
                 <td colspan="2" align="center"><i>TOTAL COST:</i></td>
                 <td><b>{{Cart::getTotal()}}.00 Birr</b></td>
            </tr>         
                      
                    </tbody>
                </table>
        <!-- +++++++++++++++++++++++++++++++++++++++++ -->
        <!-- solid sales graph -->
            <div class="card bg-gradient-info">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                 Reserve The Order
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body" >
                <div class="card card-primary card-outline">
              <div class="card-body box-profile" style="background-color:#E7BA31;">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="userimage/{{Auth::user()->profile_photo_path}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><b>NAME:</b>{{Auth::user()->name}}</h3>
                <p class="text-muted text-center"><b>USER ID:</b>{{Auth::user()->id}}</p>
                <p class="text-muted text-center"><b>EMAIL:</b>{{Auth::user()->email}}</p>
                <p class="text-muted text-center"><b>PHONE:</b>{{Auth::user()->phone}}</p>
                <p class="text-muted text-center"><b>ADDRESS:</b>{{Auth::user()->address}}</p>

                <ul class="list-group list-group-unbordered mb-3" >
                  <li class="list-group-item"style="background-color:#E7BA31;" >
                    <b>Total Cost</b> <p class="float-right">{{Cart::getTotal()}}.00 Birr</p>
                  </li>
                </ul>
                <form action="{{url('reserve')}}" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                    @csrf
                <input type="number" name="totall" value="{{Cart::getTotal()}}" hidden>
                <input type="number" name="totall" value="{{Cart::getTotal()}}" hidden>
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address"> Receit Photo <span class="required">*</span>
                </label>
                <input type="file" class="float-right"  name="file" accept=".jpg, .jpeg, .png"  required="">
                <button type="submit" title="Reserve Order"  id="btn-notice" type="submit" class="btn btn-primary btn-block" style="background-color:#528EB5;"><b>Reserve Order
                    <span><i class="fas fa-cart-plus" style="color: white;" ></i></span></b></button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
              </div>
              <!-- /.card-body -->
              <!--////////////////////// line Graph values  -->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div class="text-white"><b>Remider:</b></div>
                   <p><i> Orders should be picked up 24 hours after its reservation. Otherwise, the reservation will be cancelled.</i></p>

                    
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                     <div class="text-white"><b>Notice:</b></div>
                    <p><i>Please check your details and click reserve.</i></p>

                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div class="text-white"><b>Alert:</b></div>
                  <p><i>Please insert Valied receit and click reserve.</i></p>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
<!-- ======================================================= -->
              </div>
            </div>
          </div>
        </div>
      </div>
</section>   
</div>
@endif
@include('layout.footer')
