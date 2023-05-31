<div class="modal fade" id="modal-viewsales{{$sale->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View Sales</h4>
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
                                <label>Product Name</label>
                                <input type="text" name="name" value="{{$sale->name}}" class="form-control" placeholder="" required="" autocomplete="off" readonly>
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>Product Batch Id</label>
                                <input type="text" name="email" value="{{$sale->batch_id}}" class="form-control" placeholder="" required="" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Product Quantity</label>
                                <input type="text" name="phone" value="{{$sale->quantity}}" class="form-control" placeholder="" autocomplete="off"readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Product Type</label>
                                <input type="text" name="address" value="{{$sale->type}}" class="form-control" placeholder="" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Retail Price</label>    
                            <input type="text" name="role" class="form-control" value="{{$sale->retail_price}} Birr" placeholder="" autocomplete="off" readonly>
                            </div>
                        </div>                    
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>Remark</label>
                                <textarea id="inputMessage" placeholder="{{$sale->remarks}}" class="form-control" rows="2" required readonly></textarea> 
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                            <label>Statues</label>
                            <textarea name="quality" placeholder="{{$sale->statues}}" class="form-control" rows="2" required readonly></textarea> 
                            </div>
                        </div>
                    </div>        
                </div>
                <div class="modal-footer justify-content-between">
                    <input type="hidden" name="id" value="{{$sale->id}}">
                    <button type="button" style="background-color:#528EB5;" class="btn btn-default" data-dismiss="modal">Close</button>
                   
                </div>
            </form>
</div>