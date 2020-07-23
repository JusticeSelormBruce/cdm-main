<!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal{{$subject->id}}delete">
    Delete
</button>

<div class="modal fade" id="exampleModal{{$subject->id}}delete" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel{{$subject->id}}delete" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel{{$subject->id}}delete">Delete record for {{$subject->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer mx-auto">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">cancel</button>
                <a href="{{route('subject.delete',['id'=>$subject->id])}}" class="btn btn-danger btn-sm">Delete</a>
            </div>
        </div>
    </div>
</div>
