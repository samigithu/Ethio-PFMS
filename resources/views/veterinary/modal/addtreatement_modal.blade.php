<div class="modal fade" id="modal-addtreatement{{$disease->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Treatement</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
<!-- //////// -->
 <form action="{{url('add_treatement',$disease->id)}}" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                    @csrf
 <div class="modal-body">
            <div class="row">
            	 <div class="col-md-6">
                            <div class="form-group">
                                  <label>Medicine<span class="required">*</span></label>
                                   <select name="name" class="form-control" required="">
                                    <option >--Select Medicine--</option>
                                  	@foreach($medicines as $medicine)
                              <option value="{{$medicine->name}}"}}>{{$medicine->id}}:Name:{{$medicine->name}}:Quantity:{{$medicine->quantity}}{{$medicine->unit}}
                              </option>
                              @endforeach
                             </select>
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Quantity<span class="required">*</span></label>
                            <input type="number" class="form-control" name="quantity" placeholder="" min="1"  required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                  <label> Prescription<span class="required">*</span></label>
                                <textarea id="inputMessage" name="prescription" placeholder="please write Prescription here" class="form-control" rows="2" required></textarea>
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