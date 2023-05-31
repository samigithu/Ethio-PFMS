<div class="modal fade" id="modal-editproducts{{$products->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">update Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>            
            <form action="{{url('update_products',$products->id)}}" method="POST" enctype="multipart/form-data">
         <div class="modal-body">
                    @csrf
                    <div class="row">
                    <div class="col-md-6">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" name="name" value="{{$products->name}}" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>Product Quantity</label>
                                <input type="number" name="quantity" value="{{$products->quantity}}" class="form-control" placeholder="" min="1" required="" autocomplete="off">
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Product Type</label>    
                            <select name="type" class="form-control" required="">
                            <option value="{{$products->type}}" selected>{{$products->type}}</option>
                            <option value="admin">admin</option>
                            <option value="culle">Culles</option>
                            <option value="chicken">Chickens</option>
                            <option value="equipment">Equipments</option>
                            <option value="pullet">Pullets</option>
                            </select>
                            </div>
                        </div>    
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" style="background-color:#528EB5;" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" style="background-color:#528EB5;" class="btn btn-primary" >Update</button>
                </div>
            </form>
        </div>
