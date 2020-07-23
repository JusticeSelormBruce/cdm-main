


<!-- Button trigger modal -->
<button type="button" class="btn text-white bg-info  btn-sm" data-toggle="modal" data-target="#exampleModalLong{{$department->id}}">
    <span class=" text-lowercase"> Edit</span>
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong{{$department->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle{{$department->id}}" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle{{$department->id}}">Add New Campus</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="jumbotron">
                     <form action="/admin/colleges/department/edit" method="POST">
                         @csrf
                         <input type="hidden" name="id" value="{{$department->id}}">

                         <div class="form-group">
                             <div class="row">
                                 <label for="long_name">Name*</label>
                                 <input type="text" name="long_name" class="form-control"  required value="{{$department->long_name}}">
                                 <div class="text-danger">
                                     {{
                                         $errors->first('long_name')
                                     }}
                                 </div>
                             </div>
                             <div class="row">
                                 <label for="short_name">short Name</label>
                                 <input type="text" name="short_name" class="form-control"  value="{{$department->short_name}}">
                                 <div class="text-danger">
                                     {{
                                         $errors->first('short_name')
                                     }}
                                 </div>
                             </div>
                             <div class="row">
                                 <label for="description">Description</label>
                                 <textarea name="description" id="" cols="30" rows="10" class="form-control">
                                     {{$department->description}}
                                 </textarea>
                             </div>
                         </div>

                         <div class="row">
                             <div class="mx-auto"><button type="submit" class="btn btn-success btn-sm"> <span class="mx-5">Update</span></button></div>
                         </div>
                     </form>
                  </div>
              </div>

          </div>
      </div>
  </div>
