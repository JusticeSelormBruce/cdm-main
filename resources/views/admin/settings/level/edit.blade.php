<div class="row">
    
      <button type="button" class="btn text-white bg-primary h5" data-toggle="modal" data-target="#exampleModalLong{{$item->id}}level">
        <span class="small"> Edit</span>
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModalLong{{$item->id}}level" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle{{$item->id}}level" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle{{$item->id}}level">update  Academic Level</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <div class="jumbotron">
                          <form action="/admin/level/edit" method="POST">
                          @csrf
                          <input type="hidden" name="id" value="{{$item->id}}">
                           <div class="form-group">
                            <label for="level">Academic Semester</label>
                            <input type="text" name="level" class="form-control" required value="{{$item->level}}">
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
  