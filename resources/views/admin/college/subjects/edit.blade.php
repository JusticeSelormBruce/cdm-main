


<!-- Button trigger modal -->
<button type="button" class="btn text-white bg-info  btn-sm" data-toggle="modal" data-target="#exampleModalLong{{$subject->id}}">
    <span class=" text-lowercase"> Edit</span>
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong{{$subject->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle{{$subject->id}}" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle{{$subject->id}}">Edit</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="jumbotron">
                     <form action="/admin/colleges/subject/edit" method="POST">
                         @csrf
                         <input type="hidden" name="id" value="{{$subject->id}}">
                         <div class="form-group">
                             <div class="row">
                                 <label for="program">Department*</label>
                                 <select name="department_id"  required class="form-control py-2">
                                     <option value=""> Select Programme to add Subject</option>
                                     @foreach($programmes as $program)
                                         <option value="{{$program->id}}" @if($program->id == $subject->program_id) selected : " " @endif>{{$program->long_name}} <span class="mx-2">{{$program->short_name}}</span></option>
                                     @endforeach
                                 </select>
                                 <div class="text-danger">
                                     {{
                                         $errors->first('program_id')
                                     }}
                                 </div>
                             </div>
                             <div class="row">
                                 <label for="name">Name*</label>
                                 <input type="text" name="name" class="form-control"  required value="{{$subject->name}}">
                                 <div class="text-danger">
                                     {{
                                         $errors->first('name')
                                     }}
                                 </div>
                             </div>
                             <div class="row">
                                 <label for="code">Code</label>
                                 <input type="text" name="code" class="form-control"  value="{{$subject->code}}">
                                 <div class="text-danger">
                                     {{
                                         $errors->first('code')
                                     }}
                                 </div>
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
