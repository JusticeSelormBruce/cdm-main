

<!-- Button trigger modal -->
<button type="button" class="btn text-white bg-dark h5" data-toggle="modal" data-target="#exampleModalLong">
    <span class="small"> Add Programme</span>
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Add New Programme</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="jumbotron">
                      <form action="/admin/colleges/programs/store" method="POST">
                    @csrf
                    @include('admin.college.programs.form')
                    <div class="row">
                        <div class="mx-auto"><button type="submit" class="btn btn-success btn-sm"> <span class="mx-5">Save</span></button></div>
                    </div>
                    </form>

                  </div>
              </div>

          </div>
      </div>
  </div>

