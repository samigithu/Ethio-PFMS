<div class="modal fade" id="modal-viewfullscreen{{$order->id}}">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View Recit Image</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
<!-- //////// -->
 <form action="" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                    @csrf
 <div class="modal-body" >
            
            
                                <p style="font-size: 12px;color: red"> <img src="recietimage/{{$order->receipt_photo_path}}" style="width: 90%;
                                height: auto;">&nbsp;&nbsp;{{$order->receipt_photo_path}}</p>
                           
                </div>         
               
  </form>


    </div>
    </div>
</div>


     