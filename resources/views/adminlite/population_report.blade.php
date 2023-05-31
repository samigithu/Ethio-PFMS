 @include('layout.headd')
@if(Auth::id() && Auth::user()->userType=='admin' && Auth::user()->statues=='Active')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Chicken Product population</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Chicken Product population</li>
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
              </div>
              <div class="card-body" style="background-color:#E7BA31;">
             <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                   <th>ID </th>
                    <th>Product_batch Id</th>
                    <th>product Name </th>
                    <th>From Date</th>
                    <th>Last Visit</th>
                    <th>Product Type</th>
                    <th>Product Quantity </th>
                    <th>Aded By</th>
                    <th>Remarkes</th>
                    <th>Statues</th>
                  </tr>
                  </thead>
                   <tbody>
                    @foreach($product as $products)
                    <tr>
                      <td>{{$products->id}}</td>
                      <td>{{$products->batch_id}}</td>
                      <td>{{$products->name}}</td>
                       <td>{{$products->created_at->toRfc850String()}}</td>
                      <td>{{$products->updated_at->toRfc850String()}}</td>
                      <td>{{$products->type}}</td>
                      <td>{{$products->quantity}}</td>
                      <td>{{$products->added_by}}</td>
                      <td>{{$products->remarkes}}</td>
                      <td>{{$products->statues}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                </table> 
               <div class="card"  style="background-color:#E7BA31;">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                     +++++   Product Rate info ++++
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
           <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="{{$chickens/100}}%" data-width="60" data-height="60"
                           data-fgColor="#189252">

                    <div class="text-white">Totall-Chicken</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
	                <input type="text" class="knob" data-readonly="true" value="{{$culle/100}}%" data-width="60" data-height="60"
                           data-fgColor="#189252">

                    <div class="text-white">Totall-culle Rate</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="{{$pullet/100}}%" data-width="60" data-height="60"
                           data-fgColor="#189252">

                    <div class="text-white">Totall-pullet Rate</div>
                  </div>
              </div>
                  <div class="row">
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="{{$equi/100}}%" data-width="60" data-height="60"
                           data-fgColor="#189252">

                    <div class="text-white">Totall-Equipment Rate</div>
                   </div>
                    <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="{{$egg_s/100}}%" data-width="60" data-height="60"
                           data-fgColor="#189252">

                    <div class="text-white">Totall-Eggs Rate</div>
                  </div>
                  </div>
                </div>
            </div>
                <!-- /.row -->
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>   
</div>
@endif
@include('layout.footer')