<div class="modal fade" id="modal-viewmessage{{$message->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View Messages</h4>
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
                                <label>Sender Id</label>
                                <input type="text" name="name" value="{{$message->sender_id}}" class="form-control" placeholder="" required="" autocomplete="off" readonly>
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>Sender Email</label>
                                <input type="email" name="email" value="{{$message->sender_email}}" class="form-control" placeholder="" required="" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sender Phone</label>
                                <input type="text" name="phone" value="{{$message->sender_phone}}" class="form-control" placeholder="" autocomplete="off"readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" name="address" value="{{$message->subject}}" class="form-control" placeholder="" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Message Type</label>    
                            <input type="text" name="role" class="form-control" value="{{$message->type}}" placeholder="" autocomplete="off" readonly>
                            </div>
                        </div>                    
                         <div class="col-md-6">
                            <div class="form-group">
                            <label>Message</label>
                             <textarea type="text" name="address" placeholder="{{$message->message}}" class="form-control" placeholder="" rows="2" autocomplete="off" readonly></textarea>
                            </div>
                        </div>
                    </div>        
                </div>
                <div class="modal-footer justify-content-between">
                    <input type="hidden" name="id" value="{{$message->id}}">
                    <button type="button" style="background-color:#528EB5;" class="btn btn-default" data-dismiss="modal">Close</button>      
                </div>
            </form>
        </div>
    </div>
</div>