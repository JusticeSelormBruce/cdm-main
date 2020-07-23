 <style>
     hr {
         background-color: black !important;
     }

 </style>
 @extends('layouts.admin')
 @section('render')
     <div class="container-fluid pt-5 text-small">
        
         @include('common.alert')
         <div class="jumbotron">
             <h4 class="mx-5">General Academic Settings Menu</h4>
             <hr>
           
                     <h4 class="mx-5"> Academic Year</h4>
                     <div class="jumbotron py-1">
                         @include('admin.settings.year.index')
                         @include('admin.settings.year.list')
                     </div>
                     <hr>
                

                     <h4 class="mx-5"> Academic Semester</h4>
                     <div class="jumbotron  py-1">
                         @include('admin.settings.semester.index')
                         @include('admin.settings.semester.list')
                     </div>
                     <hr>
              

                     <h4 class="mx-5"> Academic Levels</h4>
                     <div class="jumbotron   py-1">
                         @include('admin.settings.level.index')
                         @include('admin.settings.level.list')
                     </div>
                     <hr>
                
             </div>


         </div>
     </div>
 @endsection
