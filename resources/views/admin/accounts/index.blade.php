@extends('layouts.admin')
@section('render')
    <div class="container" class="mt-5">
        <div class="jumbotron py-0">
            <div class="row">

                <div class="mx-auto">General Account Menu</div>
            </div>
        </div>
        <div class="row">
            <label for="total" class="mx-5"><b>Total: ghc</b><span class="mx-1">{{$accounts->sum('amount')}}</span></label>
            <div class="ml-auto mx-4">
                @include('admin.accounts.credit')
            </div>
        </div>
        <table id="table_id">
            <thead>
            <tr>
                <th>Receipt No</th>
                <th>Credited By:</th>
                <th>Date:</th>
                <th>Amount:</th>
                <th>Academic Year:</th>
                <th>Semester:</th>
                <th>Student Name:</th>
                <th>Campus:</th>
                <th>Date and Time</th>
            </tr>
            </thead>
            <tbody>
            @foreach($accounts as $list)
                <tr>
                    <td>{{$list->amount}}</td>
                    <td>{{$list->date}}</td>
                    <td>{{$list->rceipt_no}}</td>
                    <td>{{$list->academic_year}}</td>
                    <td>{{$list->semester}}</td>
                    <td>{{$list->student_name}}</td>
                    <td>{{$list->campus}}</td>
                    <td>{{$list->credited_by}}</td>
                    <td>{{$list->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>
    </div>

@endsection
