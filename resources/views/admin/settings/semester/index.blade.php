<div class="row">
  <div class="ml-auto">
    <button type="button" class="btn text-white bg-dark h5" data-toggle="modal" data-target="#exampleModalLongsemester">
      <span class="small"> Add New Academic semester</span>
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModalLongsemester" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitlesemester" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitlesemester">New Academic semester</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="jumbotron">
                        <form action="/admin/semester/store" method="POST">
                        @csrf
                         <div class="form-group">
                          <label for="semester">Academic semester</label>
                          <input type="text" name="semester" class="form-control" required placeholder="eg. 1st Semester">
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
