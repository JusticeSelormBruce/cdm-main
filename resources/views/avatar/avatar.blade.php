

<!-- Button trigger modal -->
<button type="button" class="btn text-white text-dark" data-toggle="modal" data-target="#exampleModalLongp">
    <span class="text-capitalize"> Change Avatar</span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLongp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitlep" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitlep">Avatar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-light">
                <div class="jumbotron">
                    <form action="{{route('avatar')}}" method="post" enctype="multipart/form-data" >

                        @csrf
                        <input type="hidden" name="user_id" value="{{Auth::id()}}">
                        <div class="input-group-sm">
                            <input type="file" name="path" required
                                   onchange="document.getElementById('value').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        <div class=" input-group-sm pt-3">
                            <img class=" w-100 h-100 img-raised img-fluid" id="value"/>
                        </div>

                        <div class="row ">
                            <div class="mx-auto">
                                <button class="btn btn-success btn-sm" type="submit">   <span class="mx-5">Update Avatar</span></button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

