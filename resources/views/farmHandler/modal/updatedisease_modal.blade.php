<div class="modal fade" id="modal-editdisease{{$disease->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">update disease</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>            
            <form action="{{url('update_disease',$disease->id)}}" method="POST" enctype="multipart/form-data">
         <div class="modal-body">
                    @csrf
                    <div class="row">
            	 <div class="col-md-6">
                            <div class="form-group">
                                  <label>Chicken_BID<span class="required">*</span></label>
                                   <select name="cbid" class="form-control" required="">
                                   	<option value="{{$disease->batch_id}}" selected>{{$disease->batch_id}}:Name:{{$disease->batch_name}}</option>
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
                                <textarea id="inputMessage" name="symptom" placeholder ="{{$disease->symptom}}" class="form-control" rows="2" required></textarea>
                            </div>
                        </div>
            
                      <div class="col-md-6">
                            <div class="form-group">
                            <label>Infection date<span class="required">*</span></label>
                            <input type="date" class="form-control" name="infection_date" value="{{$disease->infection_date}}" placeholder="" min="1"  required="">
                            </div>
                        </div>

         </div> 
                <div class="modal-footer justify-content-between">
                    <button type="button" style="background-color:#528EB5;" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" style="background-color:#528EB5;" class="btn btn-primary" >Update</button>
                </div>
            </form>
        </div>
