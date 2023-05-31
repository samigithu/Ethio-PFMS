
  <div class="page-section" id="workers">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">{{trans('messages.ourworkers') }}</h1>
      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        @foreach($user as $users)
        @if($users->userType!='customer'&& $users->profile_photo_path!='')
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img height="300 px" src="userimage/{{$users->profile_photo_path}}" alt="">
              <div class="meta">
                <a href="tel:{{$users->phone}}"><span class="mai-call"></span></a>
                <a href="mailto:{{$users->email}}"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$users->name}}</p>
              <span class="text-sm text-grey">{{$users->userType}}</span>
            </div>
          </div>
        </div>
        @endif
        @endforeach
        
      </div>
    </div>
  </div>
