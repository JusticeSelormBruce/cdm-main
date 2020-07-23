

<!-- Button trigger modal -->
<button type="button" class="btn text-white bg-dark h5" data-toggle="modal" data-target="#exampleModalLongsub">
    <span class="small"> Add Subject</span>
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalLongsub" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitlesub" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitlesub">Add New Subject</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="jumbotron">
                      <form action="/admin/colleges/subject/store" method="POST">
                    @csrf
                    @include('admin.college.subjects.form')
                    <div class="row">
                        <div class="mx-auto"><button type="submit" class="btn btn-success btn-sm"> <span class="mx-5">Save</span></button></div>
                    </div>
                    </form>

                  </div>
              </div>

          </div>
      </div>
  </div>

