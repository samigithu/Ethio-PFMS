<div class="modal fade" id="modal-overlay">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
<!-- //////// -->
 <form action="{{url('upload_user')}}" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                    @csrf
 <div class="modal-body">
            <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                  <label> User Name  <span class="required">*</span></label>
                                  <input type="text" name="name" placeholder="write the name" class="form-control" required="">
                            </div>
                        </div>
                  <div class="col-md-6">
                            <div class="form-group">
                                  <label> Phone Number  <span class="required">*</span></label>
                                  <input type="tel" class="form-control" name="number" placeholder="write the number" data-rule="minlen:10" required="">
                            </div>
                    </div>
            </div>
            <div class="row">
                   <div class="col-md-6">
                            <div class="form-group">
                                  <label> Email  <span class="required">*</span></label>
                                  <input type="email"  name="email" placeholder="write the email" class="form-control" required="">
                            </div>
                        </div>

           

                         <div class="col-md-6">
                            <div class="form-group">
                                  <label> Address  <span class="required">*</span></label>
                                 <input type="text"  name="address" placeholder="write the adress" class="form-control" required="">
                            </div>
                        </div>
             </div>
               <div class="row">
                      <div class="col-md-6">
                            <div class="form-group">
                                  <label> User Role  <span class="required">*</span></label>
                                  <select name="role" class="form-control" required="">
                            <option>---Select---</option>
                            <option value="admin">System Admin</option>
                            <!-- <option value="customer">Customer</option> -->
                            <option value="farmHandler">Farm Handler</option>
                            <option value="veterinary">Veterinary</option>
                            <option value="saleManager">Sale Manager</option>
                            <option value="businessOwener">Business Owener</option>
                        </select>
                            </div>
                        </div>
              
                     <div class="col-md-6">
                            <div class="form-group">
                                  <label> Profile Image  <span class="required">*</span></label>
                                  <input type="file" class="form-control"  name="file" accept=".jpg, .jpeg, .png" placeholder="upload profile photos" required="">
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
    </div>
</div>