<div class="modal fade" id="modal-add_eggs">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Product Eggs</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
<!-- //////// -->
 <form action="{{url('add_product_eggs')}}" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
 <div class="modal-body">
    @csrf
               <div class="row">
                      <div class="col-md-6">
                            <div class="form-group">
                            <label> egg type  <span class="required">*</span></label>
                            <select name="type" class="form-control" required="">
                            <option>---Select---</option>
                            <option value="jumbo">Jumbo</option>
                            <option value="xlarge">Xlarge</option>
                            <option value="large">Large</option>
                            <option value="midium">Midium</option>
                            <option value="small">Small</option>
                            <option value="peewee">Peewee</option>
                            <option value="softshell">Softshell</option>
                           </select>
                            </div>
                        </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                  <label> egg quantity <span class="required">*</span></label>
                                  <input type="number" class="form-control" name="quantity" placeholder="write the amount" min="1"  required="">
                            </div>
                    </div>
         </div>     
       <div class="modal-footer justify-content-between">
                      <button type="reset"style="background-color:#528EB5;"  class="btn btn-primary" name="emplo">Reset</button>
                    <button style="background-color:#528EB5;" type="submit" class="btn btn-primary" name="emplo">Save</button>
        </div>                     
  </form>
</div>