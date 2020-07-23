


<!-- Button trigger modal -->
<button type="button" class="btn text-white bg-info h5" data-toggle="modal" data-target="#exampleModalLong{{$item->id}}">
    <span class="small"> Edit</span>
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle{{$item->id}}" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle{{$item->id}}">Add New Campus</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="jumbotron">
                     <form action="{{route('campus.edit')}}" method="POST">
                         @csrf
                         <input type="hidden" name="id" value="{{$item->id}}">
                        <div class="form-group">
                            <div class="row">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control"  required value="{{$item->name}}">
                                <div class="text-danger">
                                    {{
                                        $errors->first('name')
                                    }}
                                </div>
                            </div>
                            <div class="row">
                                <label for="location">Location</label>
                                <input type="text" name="location" class="form-control" required value="{{$item->location}}">
                                <div class="text-danger">
                                    {{
                                        $errors->first('location')
                                    }}
                                </div>
                            </div>
                            <div class="row">
                                <label for="phone">Phone</label>
                                <input type="number" name="phone" class="form-control" required value="{{$item->phone}}">
                                <div class="text-danger">
                                    {{
                                        $errors->first('phone')
                                    }}
                                </div>
                            </div>
                            <div class="row">
                                <label for="phone1">Phone alt 1</label>
                                <input type="number" name="phone1" class="form-control"  value="{{$item->phone1}}">
                                <div class="text-danger">
                                    {{
                                        $errors->first('phone1')
                                    }}
                                </div>
                            </div>
                            <div class="row">
                                <label for="phone2">Phone alt 2</label>
                                <input type="number" name="phone2" class="form-control"  value="{{$item->phone2}}" >
                                <div class="text-danger">
                                    {{
                                        $errors->first('phone2')
                                    }}
                                </div>
                            </div>
                            <div class="row">
                                <label for="description">Description</label>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$item->description}}</textarea>
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
  