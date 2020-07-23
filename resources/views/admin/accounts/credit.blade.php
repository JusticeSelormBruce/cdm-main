

<!-- Button trigger modal -->
<button type="button" class="btn text-white bg-success  btn-sm" data-toggle="modal" data-target="#exampleModalLong">
    <span class="small"> Credit Student Account</span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Credit Student Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="jumbotron">


                        @include('admin.accounts.form')


                </div>
            </div>

        </div>
    </div>
</div>

