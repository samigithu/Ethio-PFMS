<div class="modal fade" id="modal-addremark{{$order->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Approve Order</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
<!-- //////// -->
 <form action="{{url('approve_orders',$order->id)}}" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                    @csrf
 <div class="modal-body">
        <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                <label>order detail info <span class="required">*</span></label>
                @foreach($detail as $details)
                @if($details->order_id==$order->order_id &&  $details->statues=='unserved')
                <textarea id="inputMessage" name="remark" placeholder="{{$details->product_id}}:{{$details->product_name}}:Q={{$details->quantity}}" class="form-control" rows="2" disabled></textarea>

@endif
@endforeach
                  </div>
                 </div>
                  <div class="col-md-6">
                <div class="form-group">
                <label>sell product  info <span class="required">*</span></label>
                @foreach($sales as $sales)
                @foreach($detail as $details)
                @if($details->product_id==$sales->id &&  $details->statues=='unserved' && $details->order_id==$order->order_id)
                
                <textarea id="inputMessage" name="remark" placeholder="{{$sales->id}}:{{$sales->name}}:Q={{$sales->quantity}} Qreq=>{{$sales->quantity-$details->quantity}}" class="form-control" rows="2" disabled></textarea>
@endif
@endforeach
@endforeach
                  </div>
                 </div>
         </div>
                 <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label> Aproval Status<span class="required">*</span></label></label>
                               <select name="stat" class="form-control" required="">
                               <option value="{{$order->status}}">{{$order->status}}</option>
                              <option value="Approved">Approve</option>
                              <option value="Rejected">Rejecte</option>
                              <option value="In progress">In progress</option>
                             </select>
                             </div>
                            </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                  <label> Remark<span class="required">*</span></label></label>
                                 <textarea id="inputMessage" name="remark" placeholder="write your remark here.." class="form-control" rows="2" ></textarea>
                                 <input type="number" name="id" value="{{$order->id}}" hidden> 
                            </div>
                            </div>
             </div>
                     <!-- <div class="col-md-6">
                            <div class="form-group">
                                  <label> Receit Image </label>
                                  <input type="file" class="form-control"  name="file" accept=".jpg, .jpeg, .png" placeholder="upload receit photos" >
                            </div>
                        </div> -->
         </div>     
       <div class="modal-footer justify-content-between">
                    <button type="button" style="background-color:#528EB5;"class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="reset"style="background-color:#528EB5;"  class="btn btn-primary" name="emplo">Reset</button>
                    <button style="background-color:#528EB5;" type="submit" class="btn btn-primary" name="emplo">Save</button>
        </div>         
               
  </form>


    </div>
    </div>
</div>