<div class="modal fade" id="modal-vieworder{{$order->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View  Orders </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
<!-- //////// -->
    <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                    <div class="col-md-6">
                            <div class="form-group">
                                <label>Order ID</label>
                                <input type="text" name="name" value="{{$order->order_id}}" class="form-control" placeholder="" required="" autocomplete="off" readonly>
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>Customer Email</label>
                                <input type="text" name="name" value="{{$order->cust_email}}" class="form-control" placeholder="" required="" autocomplete="off" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Total Cost</label>    
                            <input type="text" name="role" class="form-control" value="{{$order->total_cost}} Birr" placeholder="" autocomplete="off" readonly>
                            </div>
                        </div>       
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Handled By</label>
                                <input type="text" name="phone" value="{{$order->handled_by}}" class="form-control" placeholder="" autocomplete="off"readonly>
                            </div>
                        </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label>Order Date</label>
                                <input type="text" name="phone" value="{{$order->trans_date}}" class="form-control" placeholder="" autocomplete="off"readonly>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>Recit's Picture(Image)</label>
                                <p style="font-size: 12px;color: red"><span><i data-toggle="modal" class="fa fa-expand" data-target="#modal-viewfullscreen{{$order->id}}"> <img src="recietimage/{{$order->receipt_photo_path}}" style="width: 60px;height: 60px;padding-top: 2px">
                                    &nbsp;&nbsp;{{$order->receipt_photo_path}}</i></span></p>
                                     @include('customer.modal.view_image_fullscreen') 
                                </div>
                           
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Order Placed</label>
                                <input type="text" name="address" value="{{$order->order_placed}}" class="form-control" placeholder="" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>
                     <div class="row">
                                     
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>Remark</label>
                                <textarea id="inputMessage" placeholder="{{$order->remarks}}" class="form-control" rows="2" required readonly></textarea> 
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>Statues</label>
                                <textarea id="inputMessage" placeholder="{{$order->statues}}" class="form-control" rows="2" required readonly></textarea> 

                            </div>
                        </div>
                    </div>        
                </div>
                <div class="modal-footer justify-content-between">
                    <input type="hidden" name="id" value="{{$order->id}}">
                    <button type="button" style="background-color:#528EB5;" class="btn btn-default" data-dismiss="modal">Close</button>
                   
                </div>
            </form>
</div>