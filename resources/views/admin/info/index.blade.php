<style>
    .avatar {
        height: 100px !important;
        width: 100px !important;
    }
</style>
@extends('layouts.admin')
@section('render')
    
<div class="container-fluid pt-5">
    @include('common.alert')
    <div class="jumbotron">
     
          <form action="/admin/info-store" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="row">
                   <label for="app_name">Organizations Name</label>
                  <input type="text" name="app_name"  class="form-control" required value="{{$info->app_name ?? ''}}">
                </div>
                <div class="row">
                    <label for="app_about">Organizations About</label>
                   <textarea type="text" name="app_about"  class="form-control" required >{{$info->app_about ?? ''}} </textarea>
                 </div>
                 <div class="row">
                    <label for="app_vision">Organizations Vision</label>
                   <textarea type="text" name="app_vision"  class="form-control" required > {{$info->app_vision ?? ''}}</textarea>
                 </div>
                 <div class="row">
                    <label for="app_mission">Organizations Mission</label>
                   <textarea type="text" name="app_mission"  class="form-control" required> {{$info->app_mission ?? ''}}</textarea>
                 </div>
                 <div class="row">
                    <label for="app_year">Organizations Starting Year</label>
                   <input type="date" name="app_year"  class="form-control" required value="{{$info->app_year ?? ''}}">
                 </div>
                 <div class="row no-gutters py-2">
                    <div class="col-lg-2 col-md-4 col-sm-12">
                        <label for="attachment">Organizations Logo</label>
                    </div>
                   @if ($info ==  null )
                   <div class="col-lg-10 col-md-10 col-sm-12 input-group-sm">
                    <div class="col-lg-4 col-md-4 col-sm-12 input-group-sm">
                        <input type="file" name="logo" required onchange="document.getElementById('value').src = window.URL.createObjectURL(this.files[0])">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 input-group-sm pt-3">
                        <img class="avatar img-raised img-fluid" id="value"/>
                    </div>
               
            </div>
                   @else
                   <img class="avatar img-raised img-fluid" src="{{Storage::url($info->logo)}}">
                   @endif
                       
        
        
                </div>
                <div class="row">
                    <div class="mx-auto"><button type="submit" class="btn btn-success btn-sm"> <span class="mx-5">Save</span></button></div>
                </div>
          </form>
      
    </div>
</div>

@endsection