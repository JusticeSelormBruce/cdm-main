<!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal{{$item->id}}delete">
    Delete
</button>

<div class="modal fade" id="exampleModal{{$item->id}}delete" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel{{$item->id}}delete" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel{{$item->id}}delete">Delete record for {{$item->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer mx-auto">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">cancel</button>
                <a href="{{route('campus.delete',['id'=>$item->id])}}" class="btn btn-danger btn-sm">Delete</a>
            </div>
        </div>
    </div>
</div>
