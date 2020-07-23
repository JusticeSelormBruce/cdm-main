@extends('layouts.admin')
@section('render')

    <style>
        h1 {
            font-size: 50pt !important;
        }

        a {
            text-decoration: none;
        }
    </style>
    <div class="container py-5">
        @if(Auth::user()->user_type == "Admin" || Auth::user()->user_type == "Lecturer"  )

            <div class="row mt-5">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="jumbotron py-3">
                        <label for="">Campuses</label>
                        <img src="{{asset('icons/campus.png')}}" alt="">
                        <hr>
                        <div class="row">
                            <div class="mx-auto"><span class="h1"> <b>{{$campuses}}</b></span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="jumbotron py-3">
                        <label for="">Departments</label>
                        <img src="{{asset('icons/department.jpg')}}" alt="">
                        <hr>
                        <div class="row">
                            <div class="mx-auto"><span class="h1"> <b>{{$departments}}</b></span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="jumbotron py-3">
                        <label for="">Subjects</label>
                        <img src="{{asset('icons/subject.png')}}" alt="">
                        <hr>
                        <div class="row">
                            <div class="mx-auto"><span class="h1"> <b>{{$subjects}}</b></span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="jumbotron py-3">
                        <label for="">Programmes</label>
                        <img src="{{asset('icons/programmes.png')}}" alt="">
                        <hr>
                        <div class="row">
                            <div class="mx-auto"><span class="h1"> <b>{{$programmes}}</b></span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="jumbotron py-3">
                        <label for="">Students</label>
                        <img src="{{asset('icons/student.png')}}" alt="">
                        <hr>
                        <div class="row">
                            <div class="mx-auto"><span class="h1"> <b>{{$students}}</b></span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="jumbotron py-3">
                        <label for="">Lecturers</label>
                        <img src="{{asset('icons/teacher.png')}}" alt="">
                        <hr>
                        <div class="row">
                            <div class="mx-auto"><span class="h1"> <b>{{$lecturer}}</b></span></div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="jumbotron">
                @if($applicant == null)
                    <h3>Sorry, No personal Information's Yet</h3>
                @else
                    @include('admin.student.view')
                @endif
            </div>

        @endif
    </div>
@endsection
