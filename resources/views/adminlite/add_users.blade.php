 @include('layout.headd')
@if(Auth::id() && Auth::user()->userType=='admin' && Auth::user()->statues=='Active')
 <div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
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
			  <a href="#"><button type="button" class="btn btn-primary" onclick="window.print();" style="background-color:#528EB5;">
                   Print
                </button> </a></h3>
                <h3 class="card-title" style="float: right;">                 
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-overlay" style="background-color:#528EB5;">
                  add user
                </button> @include('adminlite.modal.adduser_modal')</h3>
              </div>
              <div class="card-body">
   <form action="{{url('upload_user')}}" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
        			@csrf
        	<div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username"> User Name  <span class="required">*</span>
              </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
               	<input type="text" name="name" placeholder="write the name" class="form-control col-md-7 col-xs-12" required="">
                  </div>
             </div>

             <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone number"> Phone Number  <span class="required">*</span>
              </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
               <input type="tel" class="form-control col-md-7 col-xs-12" name="number" placeholder="write the number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required="">
                  </div>
             </div>


        	 <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email"> Email <span class="required">*</span>
              </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
               	<input type="email"  name="email" placeholder="write the email" class="form-control col-md-7 col-xs-12" required="">
                 </div>
             </div>


        		 <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address"> Address <span class="required">*</span>
              </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
               	<input type="text"  name="address" placeholder="write the adress" class="form-control col-md-7 col-xs-12" required="">
                 </div>
             </div>


             <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="role"> User Role <span class="required">*</span>
              </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
               	<select name="role" class="form-control col-md-7 col-xs-12" required="">
        					<option>---Select---</option>
        					<option value="admin">admin</option>
        					<!-- <option value="customer">Customer</option> -->
        					<option value="farmHandler">Farm Handler</option>
        					<option value="veterinary">Veterinary</option>
        					<option value="farmowener">Farm Owener</option>
        					<option value="saleManager">Sale Manager</option>
        				</select>
                 </div>
               </div>

        		 <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address"> Profile Image <span class="required">*</span>
              </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
               	<input type="file" class="form-control col-md-7 col-xs-12"  name="file" accept=".jpg, .jpeg, .png"placeholder="upload profile photos" required="">
                 </div>
             </div>
        		<div class="form-group">
                 <div class="col-md-6 col-md-offset-3">
                 <button style="background-color:#528EB5;" type="reset" class="btn btn-primary"> reset </button>
                 <button title="Submit" name="usave" id="btn-notice" type="submit" class="btn btn-success" style="background-color:#528EB5;"> submit</button>
                  </div>
              </div>
  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
</div>
@endif
@include('layout.footer')

