@extends('layouts.admin')
@section('render')
    
<div class="container-fluid pt-5">
    @include('common.alert')
    <div class="jumbotron pt-2">
        <div class="row">
        <div class="ml-auto mx-4">
            @include('admin.campus.add')
        </div>
        </div>
        
        <table class="table table-striped" id="table_id">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Phone</th>
                    <th> Phone Alt 1</th>
                    <th>Phone Alt 2</th>
                    <th>Date && Time</th>
                    <th> Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($campuses as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->location}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->phone1}}</td>
                        <td>{{$item->phone2}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <div class="row">
                              @include('admin.campus.edit')
                              <span class="mx-2"></span>
                              @include('admin.campus.delete')
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection