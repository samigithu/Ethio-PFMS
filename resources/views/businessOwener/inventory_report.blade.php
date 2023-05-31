 @include('layout.headd')
 @if(Auth::id() && Auth::user()->userType=='businessOwener' && Auth::user()->statues=='Active')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Inventory Sales Products</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Inventory Sales Products</li>
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
                    <th>Retail Price</th>
                    <th>Remarkes</th>
                    <th>Statues</th>
                  </tr>
                  </thead>
                   <tbody>
                    @foreach($sales as $sale)
                    <tr>
                      <td>{{$sale->id}}</td>
                      <td>{{$sale->batch_id}}</td>
                      <td>{{$sale->name}}</td>
                      <td>{{$sale->created_at->toRfc850String()}}</td>
                      <td>{{$sale->updated_at->toRfc850String()}}</td>
                      <td>{{$sale->type}}</td>
                      <td>{{$sale->quantity}}</td>
                      <td>{{$sale->retail_price}} Birr</td>
                      <td>{{$sale->remarks}}</td>
                      <td>{{$sale->statues}}</td>
                  </tr>
                      @endforeach
                    </tbody>
                </table> 
          </div>
            </div>
          </div>
        </div>
      </div>
</section>   
</div>
@endif
@include('layout.footer')