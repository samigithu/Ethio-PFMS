<div class="modal fade" id="modal-add_product">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
<!-- //////// -->
 <form action="{{url('add_products')}}" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                    @csrf
 <div class="modal-body">
            <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                  <label> product Name  <span class="required">*</span></label>
                                  <input type="text" name="name" placeholder="write the product name" class="form-control" required="">
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
                            <label> product type  <span class="required">*</span></label>
                            <select name="type" class="form-control" required="">
                            <option>---Select---</option>
                            <option value="culle">Culles</option>
                            <option value="chicken">Chickens</option>
                            <option value="equipment">Equipments</option>
                            <option value="pullet">Pullets</option>
                             <option value="manure">Manure</option>
                           </select>
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