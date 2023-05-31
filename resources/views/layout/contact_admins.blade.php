@include('layout.headd')
@if(Auth::id()  && Auth::user()->statues=='Active')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>contact Others</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact Others</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
  </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body row">
          <div class="col-5 text-center d-flex align-items-center justify-content-center">
            <div class="">
      <img src="adminlite/dist/img/AdminLTELogo1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ETHIO<strong>CHICKEN</strong></span>
      <p class="lead mb-5">123 Aribaminch 01, yetneberish, 9876 NA<br>
                Phone: 091234567
              </p>
            </div>
          </div>
          <div class="col-7">
           <!--  <div class="form-group">
              <label for="inputName">Time</label>
              <input type="time" id="time" class="form-control" />
            </div>
            <div class="form-group">
              <label for="inputEmail">Date</label>
              <input type="date" id="date" class="form-control" />
            </div> -->
             <form action="{{url('submit_message')}}" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
              @csrf
             <div class="form-group">
              <label for="inputEmail">Message Type</label>
              <select name="message_type" class="form-control" required="">
                  <option>---Select---</option>
                  <option value="account_report">User Account Report</option>
                  <option value="work_inqu">Work Inquirry</option>
                  <option value="sys_help">System Help</option>
          </select>
            </div>
            <div class="form-group">
              <label for="inputSubject">Subject</label>
              <input type="text" name="subject" id="inputSubject" class="form-control" />
            </div>
            <div class="form-group">
              <label for="inputEmail">To</label>
              <select name="to" class="form-control" required="">
        					<option>---Select---</option>
        					<option value="admin">System admin</option>
        					<option value="farmHandler">Farm Handler</option>
        					<option value="veterinary">Veterinary</option>
        					<option value="farmowener">Farm Owener</option>
        					<option value="saleManager">Sale Manager</option>
        	</select>
            </div>
            <div class="form-group">
              <label for="inputMessage">Message</label>
              <textarea id="inputMessage" name="message" class="form-control" rows="4" required></textarea>
            </div>
            <div class="form-group">
              <input type="submit" style="background-color:#528EB5;" class="btn btn-primary" value="Send message">
             </div>
           </form>
          </div>
        </div>
      </div>
           @if(session()->has('message'))
    <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
       {{'Message sent'}}
    </h3>
    <p> {{session()->get('message')}}
</p>
    <p>
     @php echo "<script>setTimeout(\"location.href = '../contact_admins';\",1500);</script>"; @endphp
   
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
       <a href="../contact_admins"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div>
 @endif  
    </section>
	</div>
  @endif
    <!-- /.content -->
    @include('layout.footer')
