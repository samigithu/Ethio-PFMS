<div class="modal fade" id="modal-viewtreatement{{$disease->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View Treatement</h4>
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
                                <label>Chicken_B Name</label>
                                <input type="text" name="name" value="{{$disease->batch_name}}" class="form-control" placeholder="" required="" autocomplete="off" readonly>
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>Chicken_B Id</label>
                                <input type="text" name="email" value="{{$disease->batch_id}}" class="form-control" placeholder="" required="" autocomplete="off" readonly>
                            </div>
                        </div>                  
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Symptom</label>
                                 <textarea id="inputMessage" placeholder="{{$disease->symptom}}" class="form-control" rows="2" required readonly></textarea> 
                            </div>
                        </div>
                </div>
                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Infection Date</label>
                                <input type="text" name="address" value="{{$disease->infection_date}}" class="form-control" placeholder="" autocomplete="off" readonly>
                            </div>
                        </div>
                    <div class="col-md-6">
                            <div class="form-group">
                            <label>Added by</label>    
                            <input type="text" name="role" class="form-control" value="{{$disease->added_by}}" placeholder="" autocomplete="off" readonly>
                            </div>
                        </div>       
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>Medicine</label>
                                <input type="text" name="role" class="form-control" value="{{$disease->medicine}}" placeholder="" autocomplete="off" readonly>
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="text" name="role" class="form-control" value="{{$disease->quantity}}-{{$disease->unit}}" placeholder="" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>
           <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Prescription</label> 
                             <textarea id="inputMessage" placeholder="{{$disease->prescription}}" class="form-control" rows="2" required readonly></textarea>   
                            </div>
                        </div> 
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>Remark</label>
                                <input type="text" name="role" class="form-control" value="{{$disease->remarks}}" placeholder="" autocomplete="off" readonly>
                            </div>
                        </div> 
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>Statues</label>
                                <input type="text" name="role" class="form-control" value="{{$disease->statues}}" placeholder="" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>        
                </div>
                <div class="modal-footer justify-content-between">
                    <input type="hidden" name="id" value="{{$disease->id}}">
                    <button type="button" style="background-color:#528EB5;" class="btn btn-default" data-dismiss="modal">Close</button>
                   
                </div>
            </form>
</div>