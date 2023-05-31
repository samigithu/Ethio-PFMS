 <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">{{trans('messages.getus') }}</h1>
<form action="{{url('submit_message_guest')}}" class="contact-form mt-5" method="POST" enctype="multipart/form-data">
              @csrf
        <div class="row mb-3">
          <div class="col-sm-6 py-2 wow fadeInLeft">
            <label for="name">{{trans('messages.fullname') }}</label>
            <input type="text" name="name" class="form-control" placeholder="Full name.." required>
          </div>
          <div class="col-sm-6 py-2 wow fadeInRight">
            <label for="email">{{trans('messages.email') }}</label>
            <input type="email" name="email" class="form-control" placeholder="Email address.." required>
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="subject">{{trans('messages.subject') }}</label>
            <input type="text" name="subject" class="form-control" placeholder="Enter subject.." required>
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="message">{{trans('messages.message') }}</label>
            <textarea name="message" class="form-control" rows="8" placeholder="Enter Message.."required ></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary wow zoomIn">{{trans('messages.sendmessage') }}</button>
      </form>
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
     @php echo "<script>setTimeout(\"location.href = '/';\",1500);</script>"; @endphp
   
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
       <a href="/"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div>
 @endif  