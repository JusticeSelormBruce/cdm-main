<style>
    .avatar {
        width: 20vw!important;
        height: 30vh!important;
    }
</style>
@extends('layouts.admin')
@section('render')
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                @if($avatar == null) <img src="{{ asset("avatar/avatar.png")}}" alt="" class="avatar"> @else <img
                    src=" {{Storage::url($avatar->path) }}" alt="" class="avatar"> @endif
            <span class="mx-5"></span> @include('avatar.avatar')
            </div>
        </div>
    </div>
@endsection
