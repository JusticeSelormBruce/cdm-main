<style>
    hr{
        background-color: black!important;
    }
</style>
@extends('layouts.admin')
@section('render')
    <div class="container-fluid" class="pt-5">
       <h5>College Settings Menu</h5>
        <hr>


            <div>Department Section</div>
            <div class="row">
                <div class="ml-auto mx-2">@include('admin.college.department.add')</div>
            </div>
            <p>
                <a class="btn btn-primary w-100" data-toggle="collapse" href="#collapseExampleDepartmentDetails"
                   role="button" aria-expanded="false" aria-controls="collapseExampleDepartmentDetails">
                    Details
                </a>
            </p>
            <div class="collapse" id="collapseExampleDepartmentDetails">
                <table id="table_id" class="table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Long Name</th>
                        <th>Short Name</th>
                        <th>Added On</th>
                        <th>action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($departments as $department)
                        <tr>
                            <td>{{$department->id}}</td>
                            <td>{{$department->long_name}}</td>
                            <td>{{$department->short_name}}</td>
                            <td>{{$department->created_at}}</td>
                            <td><div class="row">
                                    @include('admin.college.department.edit')
                                    @include('admin.college.department.delete')
                                </div></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>


        <hr>
        <div>Programmes Section</div>
        <div class="row">
            <div class="ml-auto mx-2">@include('admin.college.programs.add')</div>
        </div>
        <p>
            <a class="btn btn-primary w-100" data-toggle="collapse" href="#collapseExampleDepartmentDetailsprograms"
               role="button" aria-expanded="false" aria-controls="collapseExampleDepartmentDetailsprograms">
                Details
            </a>
        </p>
        <div class="collapse" id="collapseExampleDepartmentDetailsprograms">
            <table id="table_id1" class="table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Department</th>
                    <th>Long Name</th>
                    <th>Short Name</th>
                    <th>Added On</th>
                    <th>action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($programmes as $program)
                    <tr>

                        <td>{{$program->id}}</td>
                        <td>{{$program->department->long_name}}</td>
                        <td>{{$program->long_name}}</td>
                        <td>{{$program->short_name}}</td>
                        <td>{{$program->created_at}}</td>
                        <td><div class="row">
                                @include('admin.college.programs.edit')
                                @include('admin.college.programs.delete')
                            </div></td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <hr>
        <div>Subject Section</div>
        <div class="row">
            <div class="ml-auto mx-2">@include('admin.college.subjects.add')</div>
        </div>
        <p>
            <a class="btn btn-primary w-100" data-toggle="collapse" href="#collapseExampleDepartmentDetailsprogramss"
               role="button" aria-expanded="false" aria-controls="collapseExampleDepartmentDetailsprogramss">
                Details
            </a>
        </p>
        <div class="collapse" id="collapseExampleDepartmentDetailsprogramss">
            <table id="table_id2" class="table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Programme</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Added On</th>
                    <th>action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($subjects as $subject)
                    <tr>

                        <td>{{$subject->id}}</td>
                        <td>{{$subject->program->name}}</td>
                        <td>{{$subject->name}}</td>
                        <td>{{$subject->code}}</td>
                        <td>{{$subject->created_at}}</td>

                        <td><div class="row">
                                @include('admin.college.subjects.edit')
                                @include('admin.college.subjects.delete')
                            </div></td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


@endsection
