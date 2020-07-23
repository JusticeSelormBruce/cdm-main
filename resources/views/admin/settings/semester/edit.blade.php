<div class="row">
  
      <button type="button" class="btn text-white bg-primary h5" data-toggle="modal" data-target="#exampleModalLong{{$item->id}}semester">
        <span class="small"> Edit</span>
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModalLong{{$item->id}}semester" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle{{$item->id}}semester" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle{{$item->id}}semester">update  Academic Semester</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <div class="jumbotron">
                          <form action="/admin/semester/edit" method="POST">
                          @csrf
                          <input type="hidden" name="id" value="{{$item->id}}">
                           <div class="form-group">
                            <label for="semester">Academic Semester</label>
                            <input type="text" name="semester" class="form-control" required value="{{$item->semester}}">
                           </div>
                        <div class="row">
                            <div class="mx-auto"><button type="submit" class="btn btn-success btn-sm"> <span class="mx-5">update</span></button></div>
                        </div>
                        </form>
                          
                      </div>
                  </div>
      
              </div>
          </div>
      </div>
    </div>

  
  
  <!-- Button trigger modal -->
  