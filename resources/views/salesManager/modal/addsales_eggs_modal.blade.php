<div class="modal fade" id="modal-add_sale_eggs">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Sale Eggs</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
<!-- //////// -->
 <form action="{{url('add_sale_eggs')}}" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                    @csrf
 <div class="modal-body">
            <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>Sale product <span class="required">*</span></label>
                              <select name="PBID" class="form-control" required="">
                                 <option >--Select Eggs--</option>
                               @foreach($egg_s as $eggs)
                              <option value="{{$eggs->batch_id}}"}}>{{$eggs->id}}:Type:{{$eggs->type}}:Quantity:{{$eggs->quantity}}
                              </option>
                              @endforeach
                             </select>
                            </div>
                        </div>
                  <div class="col-md-6">
                            <div class="form-group">
                                  <label> product quantity <span class="required">*</span></label>
                                  <input type="number" class="form-control" name="quantity" placeholder="write the amount" min="1"  required="">
                            </div>
                    </div>
            </div>
               <div class="row">
                      <div class="col-md-6">
                            <div class="form-group">
                            <label>Retail Sale <span class="required">*</span></label>
                            <input type="number" class="form-control" name="price" placeholder="write the price" min="1"  required="">
                        </div>
                    </div> 
                     <div class="col-md-6">
                            <div class="form-group">
                            <label>Product Quality <span class="required">*</span></label>
                            <textarea name="quality" placeholder="Write Product Quality" class="form-control" rows="2" required ></textarea> 
                        </div>
                    </div>   
            </div>   
       <div class="modal-footer justify-content-between">
                    <button type="button" style="background-color:#528EB5;"class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="reset"style="background-color:#528EB5;"  class="btn btn-primary" name="emplo">Reset</button>
                    <button style="background-color:#528EB5;" type="submit" class="btn btn-primary" name="emplo">Save</button>
        </div>                      
  </form>
</div>