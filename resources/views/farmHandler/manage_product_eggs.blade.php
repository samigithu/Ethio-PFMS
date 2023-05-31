 @include('layout.headd')
@if(Auth::id() && Auth::user()->userType=='farmHandler' && Auth::user()->statues=='Active')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Manage Products Eggs</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Manage Products Eggs</li>
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
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add_eggs" style="background-color:#528EB5;">
                  add product
                </button>@include('farmHandler.modal.addproduct_eggs_modal')                       </h3>
              </div>
              <div class="card-body" style="background-color:#E7BA31;">
             <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                   <th>ID </th>
                    <th>Eggs_batch Id</th>
                    <th>Eggs Type</th>
                    <th>Eggs Quantity </th>
                    <th>Eggs Lifetime </th>
                    <th>Aded By</th>
                    <th>Remarkes</th>
                    <th>Statues</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                   <tbody>
                    @foreach($egg_s as $egg)
                    <tr>
                      <td>{{$egg->id}}</td>
                      <td>{{$egg->batch_id}}</td>
                      <td>{{$egg->type}}</td>
                      <td>{{$egg->quantity}}</td>
                      <td>{{$egg->lifetime}}</td>
                      <td>{{$egg->added_by}}</td>
                      <td>{{$egg->remarkes}}</td>
                      <td>{{$egg->statues}}</td>
                     <td style="width: 10%"><i data-toggle="modal" data-target="#modal-edit_eggs{{$egg->id}}" class="fa fa-edit" style="color: green" title="Edit eggs"></i> 
                       &nbsp; || &nbsp;<i data-toggle="modal" data-target="#modal-viewproducts_eggs{{$egg->id}}" class="fa fa-eye" style="color: blue" title="View eggs"></i> 
                        </td>
                        @include('farmHandler.modal.viewproduct_eggs_modal')            
                      </tr>
                    @include('farmHandler.modal.updateproduct_eggs_modal')              
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
     @php echo "<script>setTimeout(\"location.href = '../manage_product_eggs';\",1500);</script>"; @endphp
   
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
       <a href="../manage_product_eggs"><button class="button button--error" data-for="js_error-popup">Close</button></a>
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