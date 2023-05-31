<div class="modal fade" id="modal-edits{{$users->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Employee</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('edit_user_view',$users->id)}}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                    <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="{{$users->name}}" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="{{$users->email}}" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" value="{{$users->phone}}" class="form-control" placeholder="" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" value="{{$users->address}}" class="form-control" placeholder="" autocomplete="off">
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Role</label>    
                            <select name="role" class="form-control" required="">
                            <option value="{{$users->userType}}" selected>{{$users->userType}}</option>
                            <option value="admin">admin</option>
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
                            <label>Account Statues</label>    
                            <select name="statues" class="form-control" required="">
                            <option value="{{$users->statues}}" selected>{{$users->statues}}</option>
                            <option value="Active">Active</option>
                            <option value="Disabled">Disable</option>
                        </select>
                            </div>
                        </div>                 
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>profile Image</label>
                                <input type="file" name="profile_image" value="{{$users->profile_photo_path}}" accept=".jpg, .jpeg, .png" class="form-control" placeholder="" autocomplete="off">
                                <p style="font-size: 12px;color: red"> <img src="userimage/{{$users->profile_photo_path}}" style="width: 60px;height: 60px;padding-top: 2px">&nbsp;&nbsp;{{$users->profile_photo_path}}</p>
                            </div>
                        </div>
                    </div>        
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" style="background-color:#528EB5;" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" style="background-color:#528EB5;" class="btn btn-primary" >Update</button>
                </div>
            </form>
        </div>
    </div>
</div>