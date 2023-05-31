 @include('layout.headd')
@if(Auth::id() && Auth::user()->userType=='saleManager' && Auth::user()->statues=='Active')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Manage Sales Products</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Manage Sales Products</li>
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
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add_sale_eggs" style="background-color:#528EB5;">
                  add egge sale
                </button>  @include('salesManager.modal.addsales_eggs_modal')  
                </h3>
                <h3 class="card-title" style="float: right;">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add_sale_chicken" style="background-color:#528EB5;">
                  add chicken sale
                </button>  @include('salesManager.modal.addsales_chicken_modal')     </h3>
              </div>
              <div class="card-body" style="background-color:#E7BA31;">
             <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                   <th>ID </th>
                    <th>Product_batch Id</th>
                    <th>product Name </th>
                    <th>Product Type</th>
                    <th>Product Quantity </th>
                    <th>Retail Price</th>
                    <th>Remarkes</th>
                    <th>Statues</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                   <tbody>
                    @foreach($sales as $sale)
                    <tr>
                      <td>{{$sale->id}}</td>
                      <td>{{$sale->batch_id}}</td>
                      <td>{{$sale->name}}</td>
                      <td>{{$sale->type}}</td>
                      <td>{{$sale->quantity}}</td>
                      <td>{{$sale->retail_price}} Birr</td>
                      <td>{{$sale->remarks}}</td>
                      <td>{{$sale->statues}}</td>
                     <td style="width: 10%"><i data-toggle="modal" data-target="#modal-editsales{{$sale->id}}" class="fa fa-edit" style="color: green" title="Edit Sales"></i> 
                       &nbsp; || &nbsp;<i data-toggle="modal" data-target="#modal-viewsales{{$sale->id}}" class="fa fa-eye" style="color: blue" title="View Sales"></i> </td>
                        @include('salesManager.modal.updatesales_modal')               
                      </tr>
                         @include('salesManager.modal.viewsales_modal')  
                      @endforeach
                    </tbody>
                </table> 
              @if(session()->has('message'))
    <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
       {{'Successfull Insertion'}}
    </h3>
    <p> {{session()->get('message')}}
</p>
    <p>
     @php echo "<script>setTimeout(\"location.href = '../manage_sales';\",1500);</script>"; @endphp
   
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
       <a href="../manage_sales"><button class="button button--error" data-for="js_error-popup">Close</button></a>
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