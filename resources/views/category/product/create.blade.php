
<div class="modal fade" id="addProduct" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                <br>
                <br>
                <br>
                <b>REGISTER NEW PRODUCT</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" action="{{route('category.product.register',[$category->id])}}" method="post">
                    @csrf
                    <input type="text" class="form-control" placeholder="PRODUCT NAME" value="{{old('name')}}" name="name">
                    <br>
                    <input type="number" class="form-control" placeholder="PRODUCT PRICE" value="{{old('price')}}" name="price">
                    <br>
                    <input type="number" class="form-control" placeholder="PRODUCT QUANTITY" value="{{old('quantity')}}" name="quantity">
                    <br>
                    <select name="discount" class="form-control">
                    <option value="">DISCOUNT</option>
                    @for($i=1; $i<=100; $i++)
                        <option value="{{$i}}">{{$i}} %</option>
                    @endfor
                    </select>
                    <br>
                    <input type="file" class="form-control" value="{{old('image')}}" name="image">
                    <br>
                    <button class="btn btn-primary">ADD PRODUCT</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>