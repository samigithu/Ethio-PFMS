 @include('layout.headd')
@if(Auth::id() && Auth::user()->userType=='saleManager' && Auth::user()->statues=='Active')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">View Customers</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">View Customers</li>
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
                   <th>Customer ID </th>
                    <th>Full Name</th>
                    <th>Phone </th>
                    <th>Email</th>
                     <th>Address </th>
                    <th>Total Order</th>
                    <th>Waiting  order</th>
                    <th>Approved order</th>
                    <th>Rejected Order</th>
                  </tr>
                  </thead>
                   <tbody>
                    @foreach($customer as $users)
                    <tr>
                      <td>{{$users->id}}</td>
                      <td>{{$users->name}}</td>
                      <td>{{$users->phone}}</td>
                      <td>{{$users->email}}</td>
                      <td>{{$users->address}}</td>
                      <td>{{$allorder->count()}}</td>
                      <td>{{$waiting->count()}}</td>
                      <td>{{$approved->count()}}</td>
                      <td>{{$rejected->count()}}</td>            
                      </tr>
                      @endforeach
                    </tbody>
                </table>  
       @if(session()->has('message'))
    <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
       {{'Successfull Updation'}}
    </h3>
    <p> {{session()->get('message')}}
</p>
    <p>
     @php echo "<script>setTimeout(\"location.href = '../view_customers';\",1500);</script>"; @endphp
   
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
       <a href="../view_customers"><button class="button button--error" data-for="js_error-popup">Close</button></a>
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

