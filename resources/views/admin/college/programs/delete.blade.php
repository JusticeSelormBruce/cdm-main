<!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal{{$program->id}}delete">
    Delete
</button>

<div class="modal fade" id="exampleModal{{$program->id}}delete" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel{{$program->id}}delete" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel{{$program->id}}delete">Delete record for {{$program->long_name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer mx-auto">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">cancel</button>
                <a href="{{route('program.delete',['id'=>$program->id])}}" class="btn btn-danger btn-sm">Delete</a>
            </div>
        </div>
    </div>
</div>
