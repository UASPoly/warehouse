
<div class="modal fade" id="edit_{{$category->id}}" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                <br>
                <br>
                <br>
                <b>{{$category->name}} CATEGORY</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" action="{{route('category.update',[$category->id])}}" method="post">
                    @csrf
                    <input type="text" class="form-control" placeholder="CATEGORY NAME" value="{{$category->name}}" name="name">
                    <br>
                    <button class="btn btn-primary">UPDATE CATEGORY</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>