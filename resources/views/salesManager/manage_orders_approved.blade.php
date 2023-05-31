 @include('layout.headd')
@if(Auth::id() && Auth::user()->userType=='saleManager' && Auth::user()->statues=='Active')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Approved Orders</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Approved Orders</li>
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
      <th >Id</th>
      <th >Customer Email</th>
      <th >Order Id</th>
      <th >Total Cost</th>
      <th >Handled By</th>
      <th >Order Placed</th>
      <th >Reciept Photo</th>
       <th >Order Date</th>
      <th >Status</th>
      <th >Remark</th>
      <th >action</th>
                  </tr>
                  </thead>
                   <tbody>
                   @foreach($orders as $order)
                    <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->cust_email}}</td>         
            <td>{{$order->order_id}}</td>
            <td>{{$order->total_cost}} Birr</td>
            <td>{{$order->handled_by}}</td>
            <td>{{$order->order_placed}}</td>
            <td><span><i data-toggle="modal" title="expand image" class="fa fa-expand" data-target="#modal-viewfullscreen{{$order->id}}"> <img height="80px" width="50px" src="recietimage/{{$order->receipt_photo_path}}" alt="recit image"></i></span></td> @include('customer.modal.view_image_fullscreen') 
            <td>{{$order->trans_date}}</td>
             <td>{{$order->status}}</td>
             <td>{{$order->remarks}}</td>
            <td style="width: 10%"><i data-toggle="modal" data-target="#modal-addremark{{$order->id}}" class="fa fa-edit" style="color: green" title="approve order"></i> &nbsp; || &nbsp;<i data-toggle="modal" data-target="#modal-info" class="fas fa-check-double" style="color: #528EB5;" title="approval requirement"></i>  &nbsp; || &nbsp;<i data-toggle="modal" data-target="#modal-vieworder{{$order->id}}" class="fa fa-eye" style="color: blue" title="View order"></i>

                        </td> 
                          @include('salesManager.modal.view_approved_order_modal') 
                      </tr>
                        @include('salesManager.modal.approve_order_modal') 
                        @include('salesManager.modal.approval_info_modal') 
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
     @php echo "<script>setTimeout(\"location.href = '../manage_orders_approved';\",1500);</script>"; @endphp
   
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
       <a href="../manage_orders_approved"><button class="button button--error" data-for="js_error-popup">Close</button></a>
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