
  <div class="modal fade" id="modal-delete{{$users->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Deactivate User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <form action="" method="">
        <div class="modal-body">
            @csrf
         <input type="text"  value="{{$users->name}}" class="form-control" required="" autocomplete="off" readonly>
        </div>
        <div class="modal-footer justify-content-between">
          <input type="hidden" value="{{$users->id}}" name="id">
          <button type="button" style="background-color:#528EB5;"  class="btn btn-default" data-dismiss="modal">Close</button>
          <a class="btn btn-danger" class="btn btn-danger" style="background-color:darkred;"  name="delete_user"  href="{{url('deactivate_user_view',$users->id)}}">Deactivate</a>
        </div>
        </form>
      </div>
    </div>
  </div>