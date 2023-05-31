  <div class="page-section bg-light" id="products">
    <div class="container">
      <h1 class="text-center wow fadeInUp">{{trans('messages.ourproducts') }}</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">{{$chickens}} {{trans('messages.healthychickens') }}</a>
              </div>
              <a href="{{url('login')}}" class="post-thumb">
                <img src="../assets/img/Products/chickens (2).jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="{{url('login')}}">{{$chickens}} {{trans('messages.healthygrowing') }}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/products/Eggs.png" alt="">
                  </div>
                  <span>{{$chickens}} {{trans('messages.chickensinpulet') }}</span>
                </div>
                <span class="mai-time"></span>  1{{trans('messages.weeks') }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="{{url('login')}}">{{trans('messages.fresheggs') }} </a>
              </div>
              <a href="{{url('login')}}" class="post-thumb">
                <img src="../assets/img/products/defusedegg.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="">{{trans('messages.fresheggsproduced') }}  </a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/products/Eggs.png" alt="">
                  </div>
                  <span>{{$chickens}} {{trans('messages.fresheggs') }} </span>
                </div>
                <span class="mai-time"></span>  4{{trans('messages.weeks') }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">{{trans('messages.fresheggs') }}</a>
              </div>
              <a href="{{url('login')}}" class="post-thumb">
                <img src="../assets/img/products/eggwithchicken.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="{{url('login')}}">{{trans('messages.harvestingeggs') }}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/products/Eggs.png" alt="">
                  </div>
                  <span>{{trans('messages.ourstore') }}</span>
                </div>
                <span class="mai-time"></span>  2{{trans('messages.weeks') }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="{{url('login')}}" class="btn btn-primary">{{trans('messages.orderus') }}</a>
        </div>
      </div>
    </div>