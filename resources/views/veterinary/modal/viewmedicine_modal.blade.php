<div class="modal fade" id="modal-viewmedicine{{$medicine->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View Medicine</h4>
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
                                <label>Medicine ID</label>
                                <input type="text" name="name" value="{{$medicine->id}}" class="form-control" placeholder="" required="" autocomplete="off" readonly>
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>Medicine Name</label>
                                <input type="text" name="email" value="{{$medicine->name}}" class="form-control" placeholder="" required="" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Medicine Quantity</label>
                                <input type="text" name="phone" value="{{$medicine->quantity}}-{{$medicine->unit}}" class="form-control" placeholder="" autocomplete="off"readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Medicine Price</label>
                                <input type="text" name="address" value="{{$medicine->price}} Birr" class="form-control" placeholder="" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Added By</label>    
                            <input type="text" name="role" class="form-control" value="{{$medicine->added_by}}" placeholder="" autocomplete="off" readonly>
                            </div>
                        </div>                    
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>Remark</label>
                                <input type="text" name="role" class="form-control" value="{{$medicine->remarks}}" placeholder="" autocomplete="off" readonly>
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>Statues</label>
                                <input type="text" name="role" class="form-control" value="{{$medicine->statues}}" placeholder="" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>        
                </div>
                <div class="modal-footer justify-content-between">
                    <input type="hidden" name="id" value="{{$medicine->id}}">
                    <button type="button" style="background-color:#528EB5;" class="btn btn-default" data-dismiss="modal">Close</button>
                   
                </div>
            </form>
</div>