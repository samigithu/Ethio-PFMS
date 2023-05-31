<div class="modal fade" id="modal-view{{$users->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View Users</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                    <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="{{$users->name}}" class="form-control" placeholder="" required="" autocomplete="off" readonly>
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="{{$users->email}}" class="form-control" placeholder="" required="" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" value="{{$users->phone}}" class="form-control" placeholder="" autocomplete="off"readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" value="{{$users->address}}" class="form-control" placeholder="" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Role</label>    
                            <input type="text" name="role" class="form-control" value="{{$users->userType}}" placeholder="" autocomplete="off" readonly>
                            </div>
                        </div>                    
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>profile Image</label>
                                <p style="font-size: 12px;color: red"> <img src="userimage/{{$users->profile_photo_path}}" style="width: 60px;height: 60px;padding-top: 2px">&nbsp;&nbsp;{{$users->profile_photo_path}}</p>
                            </div>
                        </div>
                    </div>        
                </div>
                <div class="modal-footer justify-content-between">
                    <input type="hidden" name="id" value="{{$users->id}}">
                    <button type="button" style="background-color:#528EB5;" class="btn btn-default" data-dismiss="modal">Close</button>
                   
                </div>
            </form>
        </div>
    </div>
</div>