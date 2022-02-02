
<div class="modal fade" id="product_{{$product->id}}" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                <br>
                <br>
                <br>
                <b>{{$product->name}} PRODUCT</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" action="{{route('category.product.update',[$category->id,$product->id])}}" method="post">
                    @csrf
                    <input type="text" class="form-control" placeholder="PRODUCT NAME" value="{{$product->name}}" name="name">
                    <br>
                    <input type="number" class="form-control" placeholder="PRODUCT PRICE" value="{{$product->price}}" name="price">
                    <br>
                    <input type="number" class="form-control" placeholder="PRODUCT QUANTITY" value="{{$product->quantity}}" name="quantity">
                    <br>
                    <select name="discount" class="form-control">
                    <option value="{{$product->discount}}">{{$product->discount}}% discount</option>
                    @for($i=1; $i<=100; $i++)
                        @if($product->discount != $i)
                            <option value="{{$i}}">{{$i}} %</option>
                        @endif
                    @endfor
                    </select>
                    <br>
                    <input type="file" class="form-control" value="{{old('image')}}" name="image">
                    <br>
                    <button class="btn btn-primary">UPDATE PRODUCT</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>