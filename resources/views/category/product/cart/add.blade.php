
<div class="modal fade" id="product_{{$product->id}}" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('order.addToCart')}}" method="post">
                    @csrf
                    
                    <div class="form-group row">
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <div class="col-md-3"><label for="">Quantity</label></div>
                        <div class="col-md-5">
                        <select name="quantity" id="" class="form-control">
                            @for($i =1; $i<=$product->quantity; $i++)
                               <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                            
                        </div>
                    </div>
                    
                    <button class="btn btn-secondary">ADD {{strtoupper($product->name)}} TO YOUR CART</button>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>