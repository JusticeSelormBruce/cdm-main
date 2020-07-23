


<!-- Button trigger modal -->
<button type="button" class="btn text-white bg-info  btn-sm" data-toggle="modal" data-target="#exampleModalLong{{$program->id}}">
    <span class=" text-lowercase"> Edit</span>
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong{{$program->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle{{$program->id}}" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle{{$program->id}}">Edit</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="jumbotron">
                     <form action="/admin/colleges/programs/edit" method="POST">
                         @csrf
                         <input type="hidden" name="id" value="{{$program->id}}">
                         <div class="form-group">
                             <div class="row">
                                 <label for="program">Department*</label>
                                 <select name="department_id"  required class="form-control py-2">
                                     <option value=""> Select Department to add Programme</option>
                                     @foreach($departments as $department)
                                         <option value="{{$program->id}}" @if($department->id == $program->department_id) selected : " " @endif>{{$department->long_name}} <span class="mx-2">{{$program->short_name}}</span></option>
                                     @endforeach
                                 </select>
                                 <div class="text-danger">
                                     {{
                                         $errors->first('department_id')
                                     }}
                                 </div>
                             </div>
                             <div class="row">
                                 <label for="long_name">Name*</label>
                                 <input type="text" name="long_name" class="form-control"  required value="{{$program->long_name}}">
                                 <div class="text-danger">
                                     {{
                                         $errors->first('long_name')
                                     }}
                                 </div>
                             </div>
                             <div class="row">
                                 <label for="short_name">short Name</label>
                                 <input type="text" name="short_name" class="form-control"  value="{{$program->short_name}}">
                                 <div class="text-danger">
                                     {{
                                         $errors->first('short_name')
                                     }}
                                 </div>
                             </div>
                             <div class="row">
                                 <label for="description">Description</label>
                                 <textarea name="description" id="" cols="30" rows="10" class="form-control">
                                     {{$program->description}}
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
