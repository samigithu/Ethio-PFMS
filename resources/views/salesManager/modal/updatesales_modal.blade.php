<div class="modal fade" id="modal-editsales{{$sale->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Sale</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
<!-- //////// -->
 <form action="{{url('update_sales',$sale->id)}}" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                    @csrf
 <div class="modal-body">
            <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                 <input type="text" class="form-control" name="PBID" value="{{$sale->batch_id}}"  required="" hidden>
                               <label>product info <span class="required">*</span></label>
                              	@if($sale->type=="chicken")
                               @foreach($product as $products)
                               @if($sale->batch_id==$products->batch_id)
                    <input placeholder="{{$products->name}}:Q={{$products->quantity}}" disabled>
                              @endif
                              @endforeach
                              @elseif($sale->type=="egg")
                               @foreach($egg_s as $eggs)
                                @if($sale->batch_id==$eggs->batch_id)
                              <input placeholder="{{$eggs->id}}:Type:{{$eggs->type}}:Quantity:{{$eggs->quantity}}">
                              @endif
                              @endforeach
                              @endif
                             </select>
                            </div>
                        </div>
                  <div class="col-md-6">
                            <div class="form-group">
                                  <label> product quantity <span class="required">*</span></label>
                                  <input type="number" class="form-control" name="quantity" value="{{$sale->quantity}}"  min="1"  required="">
                            </div>
                    </div>
            </div>
               <div class="row">
                      <div class="col-md-6">
                            <div class="form-group">
                            <label>Retail Sale <span class="required">*</span></label>
                    <input type="number" class="form-control" name="price" value="{{$sale->retail_price}}"  min="1"  required="">
                        </div>
                    </div>  
                     <div class="col-md-6">
                            <div class="form-group">
                            <label>Product Quality <span class="required">*</span></label>
                            <textarea name="quality" value="{{$sale->statues}}" placeholder="{{$sale->statues}}" class="form-control" rows="2" required ></textarea> 
                        </div>
                    </div>  
            </div>   
     <div class="modal-footer justify-content-between">
                    <button type="button" style="background-color:#528EB5;" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" style="background-color:#528EB5;" class="btn btn-primary" >Update</button>
                </div>       
               
  </form>
</div>