<div class="modal fade" id="modal-edit_eggs{{$egg->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">update Product eggs</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>            
<!-- //////// -->
 <form action="{{url('update_product_eggs',$egg->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
 <div class="modal-body">
               <div class="row">
                      <div class="col-md-6">
                            <div class="form-group">
                            <label> egg type  <span class="required">*</span></label>
                            <select name="type" class="form-control" required="">
                            <option value="{{$egg->type}}" selected >{{$egg->type}}</option>
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
                                  <input type="number" class="form-control" name="quantity" placeholder="write the amount" min="1" value="{{$egg->quantity}}" required="">
                            </div>
                    </div>
         </div>     
       <div class="modal-footer justify-content-between">
                      <button type="reset"style="background-color:#528EB5;"  class="btn btn-primary" name="emplo">Reset</button>
                    <button style="background-color:#528EB5;" type="submit" class="btn btn-primary" name="emplo">update</button>
        </div>                     
  </form>
</div>