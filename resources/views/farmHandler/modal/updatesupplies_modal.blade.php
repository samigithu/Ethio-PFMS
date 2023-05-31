<div class="modal fade" id="modal-editsupplies{{$suplies->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">update Supplies</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>            
            <form action="{{url('update_supplies',$suplies->id)}}" method="POST" enctype="multipart/form-data">
         <div class="modal-body">
                    @csrf
                    <div class="row">
                    <div class="col-md-6">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" name="name" value="{{$suplies->name}}" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>Product Quantity</label>
                                <input type="number" name="quantity" value="{{$suplies->quantity}}" class="form-control" placeholder="" min="1" required="" autocomplete="off">
                             <span><select name="type" class="form-control" required="">
                            <option value="gram">Gram</option>
                            <option value="pices">Pices</option>
                            <option value="meter">Meter</option>
                           </select></span>
                            </div>
                            </div>
                        </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Product price</label>    
                            <input type="number" name="price" value="{{$suplies->price}}" class="form-control" placeholder="" min="1" required="" autocomplete="off">
                            
                            </div>
                        </div>    
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" style="background-color:#528EB5;" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" style="background-color:#528EB5;" class="btn btn-primary" >Update</button>
                </div>
            </form>
        </div>
