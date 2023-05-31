 @include('layout.headd')
@if(Auth::id() && Auth::user()->userType=='businessOwener' && Auth::user()->statues=='Active')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Egg Product population</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Egg Product population</li>
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
                    <th>Eggs_batch Id</th>
                    <th>Eggs Type</th>
                    <th>From Date</th>
                    <th>Last Visit</th>
                    <th>Eggs Quantity </th>
                    <th>Eggs Lifetime </th>
                    <th>Aded By</th>
                    <th>Remarkes</th>
                    <th>Statues</th>
                  </tr>
                  </thead>
                   <tbody>
                    @foreach($egg_s as $egg)
                    <tr>
                      <td>{{$egg->id}}</td>
                      <td>{{$egg->batch_id}}</td>
                      <td>{{$egg->type}}</td>
                      <td>{{$egg->created_at->toRfc850String()}}</td>
                      <td>{{$egg->updated_at->toRfc850String()}}</td>
                      <td>{{$egg->quantity}}</td>
                      <td>{{$egg->lifetime}}</td>
                      <td>{{$egg->added_by}}</td>
                      <td>{{$egg->remarkes}}</td>
                      <td>{{$egg->statues}}</td>
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
                    <input type="text" class="knob" data-readonly="true" value="{{$large/100}}%" data-width="60" data-height="60"
                           data-fgColor="#189252">

                    <div class="text-white">Totall-Large Rate</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="{{$midium/100}}%" data-width="60" data-height="60"
                           data-fgColor="#189252">

                    <div class="text-white">Totall-Midium Rate</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="{{$xlarge/100}}%" data-width="60" data-height="60"
                           data-fgColor="#189252">

                    <div class="text-white">Totall-Xlarge Rate</div>
                  </div>
              </div>
                  <div class="row">
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="{{$jumbo/100}}%" data-width="60" data-height="60"
                           data-fgColor="#189252">

                    <div class="text-white">Totall-Jumbo Rate</div>
                   </div>
                    <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="{{$egg_tot/100}}%" data-width="60" data-height="60"
                           data-fgColor="#189252">

                    <div class="text-white">Totall-Eggs Rate</div>
                  </div>
                  </div>
                </div>
            </div>
                <!-- ==== -->
              </div>
            </div>
          </div>
        </div>
      </div>
</section>   
</div>
@endif
@include('layout.footer')