 @include('layout.headd')
@if(Auth::id() && Auth::user()->userType=='farmHandler' && Auth::user()->statues=='Active')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Manage Disease</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Manage Disease</li>
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
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add_disease" style="background-color:#528EB5;">
                  add Disease
                </button>  @include('farmHandler.modal.adddisease_modal')                     </h3>
              </div>
              <div class="card-body" style="background-color:#E7BA31;">
             <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                   <th>ID </th>
                    <th>Chickens_batch Id</th>
                    <th>Chickens_batch Name</th>
                    <th>Disease Symptoms </th>
                    <th>Date Infection</th>
                     <th>Aded By</th>
                     <th>Medicine</th>
                     <th>Quantity</th>
                    <th>prescription</th>
                    <th>Remarkes</th>
                    <th>Statues</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                   <tbody>
                    @foreach($diseas as $disease)
                    <tr>
                      <td>{{$disease->id}}</td>
                      <td>{{$disease->batch_id}}</td>
                      <td>{{$disease->batch_name}}</td>
                      <td>{{$disease->symptom}}</td>
                      <td>{{$disease->infection_date}}</td>
                      <td>{{$disease->added_by}}</td>
                      <td>{{$disease->medicine}}</td>
             <td>{{$disease->quantity}} {{$disease->unit}}</td>
                      <td>{{$disease->prescription}}</td>
                      <td>{{$disease->remarkes}}</td>
                      <td>{{$disease->statues}}</td>
                     <td style="width: 10%"><i data-toggle="modal" data-target="#modal-editdisease{{$disease->id}}" class="fa fa-edit" style="color: green" title="Edit disease"></i> 
                       &nbsp; || &nbsp;<i data-toggle="modal" data-target="#modal-viewdisease{{$disease->id}}" class="fa fa-eye" style="color: blue" title="View disease"></i> 
                        </td>                 
                         @include('farmHandler.modal.viewdisease_modal')               
                      </tr>
                     @include('farmHandler.modal.updatedisease_modal')
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
     @php echo "<script>setTimeout(\"location.href = '../manage_disease';\",1500);</script>"; @endphp
   
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
       <a href="../manage_disease"><button class="button button--error" data-for="js_error-popup">Close</button></a>
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