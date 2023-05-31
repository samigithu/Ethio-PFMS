 @include('layout.headd')
@if(Auth::id() && Auth::user()->userType=='admin' && Auth::user()->statues=='Active')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Adminstrator Staffes</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Adminstrator Staffes</li>
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
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-overlay" style="background-color:#528EB5;">
                  add user
                </button>@include('adminlite.modal.adduser_modal')
                         </h3>

              </div>
              <div class="card-body" style="background-color:#E7BA31;">
               <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                   <th>ID </th>
                    <th>Name </th>
                    <th>Phone </th>
                    <th>Email</th>
          <th>Address </th>
                    <th>Role</th>
                    <th>Account Statues</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                   <tbody>
                    @foreach($user as $users)
                    <tr>
                      <td>{{$users->id}}</td>
                      <td>{{$users->name}}</td>
                      <td>{{$users->phone}}</td>
                      <td>{{$users->email}}</td>
                      <td>{{$users->address}}</td>
                      <td>{{$users->userType}}</td>
                      <td>{{$users->statues}}</td>
                     <td style="width: 10%"><i data-toggle="modal" data-target="#modal-edits{{$users->id}}" class="fa fa-edit" style="color: green" title="Edit users"></i> | <i data-toggle="modal" data-target="#modal-view{{$users->id}}" class="fa fa-eye" style="color: blue" title="View users"></i> | <i data-toggle="modal" data-target="#modal-delete{{$users->id}}" class="fa fa-user-alt-slash" style="color: red" title="Deactivate users"></i>
                        </td>
                          @include('adminlite.modal.edituser_modal')
                          @include('adminlite.modal.viewuser_modal')
                          @include('adminlite.modal.deleteuser_modal')            
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
     @php echo "<script>setTimeout(\"location.href = '../manage_user_view';\",1500);</script>"; @endphp
   
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
       <a href="../manage_user_view"><button class="button button--error" data-for="js_error-popup">Close</button></a>
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

