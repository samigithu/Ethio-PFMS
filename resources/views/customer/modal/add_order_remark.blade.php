<div class="modal fade" id="modal-addremark{{$order->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Order Remark</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
<!-- //////// -->
 <form action="{{url('manage_my_orders')}}" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                    @csrf
 <div class="modal-body">
               <div class="row">
                       <div class="col-md-6">
                            <div class="form-group">
                                  <label> Remark</label>
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