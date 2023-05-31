<!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">{{$messages->count()}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            @foreach($messages as $message)
          <a class="dropdown-item" href="{{url('manage_message')}}">
            <!-- Message Start -->
            <div class="media">
              @foreach($sender as $senders)
              <img src="userimage/{{$senders->profile_photo_path}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              @endforeach
              <div class="media-body">
                <h3 class="dropdown-item-title">
                {{$message->sender_email}}
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">{{$message->subject}}...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p><i data-toggle="modal" data-target="#modal-viewmessage{{$message->id}}" class="fa fa-eye" style="color: blue" title="View message"></i> 
              </div>           
            </div>
            <div class="dropdown-divider"></div> 
            <!-- Message End -->
          </a>
          @include('adminlite.modal.viewmessages_modal') 
          @endforeach
          <div class="dropdown-divider"></div>
          <a href="" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- @if(Auth::user()->userType=='admin')
@include('adminlite.messages')
@endif -->