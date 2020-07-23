<div class="row">
  <div class="ml-auto">
    <button type="button" class="btn text-white bg-dark h5" data-toggle="modal" data-target="#exampleModalLonglevel">
      <span class="small"> Add New Academic Level</span>
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModalLonglevel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitlelevel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitlelevel">New Academic Level</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="jumbotron">
                        <form action="/admin/level/store" method="POST">
                        @csrf
                         <div class="form-group">
                          <label for="level">Academic Level</label>
                          <input type="text" name="level" class="form-control" required placeholder="eg.Level 100">
                         </div>
                      <div class="row">
                          <div class="mx-auto"><button type="submit" class="btn btn-success btn-sm"> <span class="mx-5">Save</span></button></div>
                      </div>
                      </form>
                        
                    </div>
                </div>
    
            </div>
        </div>
    </div>
  </div>
</div>


<!-- Button trigger modal -->
