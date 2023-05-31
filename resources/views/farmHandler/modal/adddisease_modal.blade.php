<div class="modal fade" id="modal-add_disease">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Disease</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
<!-- //////// -->
 <form action="{{url('add_disease')}}" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                    @csrf
 <div class="modal-body">
            <div class="row">
            	 <div class="col-md-6">
                            <div class="form-group">
                                  <label>Chicken_BID<span class="required">*</span></label>
                                   <select name="cbid" class="form-control" required="">
                                    <option >--Select Chicken_BID--</option>
                                  	@foreach($product as $products)
                              <option value="{{$products->batch_id}}"}}>{{$products->batch_id}}:Name:{{$products->name}}
                              </option>
                              @endforeach
                             </select>
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                  <label> Symptom<span class="required">*</span></label>
                                <textarea id="inputMessage" name="symptom" placeholder="please mention the Symptoms" class="form-control" rows="2" required></textarea>
                            </div>
                        </div>
            
                      <div class="col-md-6">
                            <div class="form-group">
                            <label>Infection date<span class="required">*</span></label>
                            <input type="date" class="form-control" name="infection_date" placeholder="" min="1"  required="">
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