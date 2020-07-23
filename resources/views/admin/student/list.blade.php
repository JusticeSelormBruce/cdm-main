@extends('layouts.admin')
@section('render')
    <style>
        html, body {
            font-size: small !important;
            font-family: BlinkMacSystemFont;
        }
    </style>
    <div class="container-fluid pt-5">

        <div class="jumbotron py-0 ">


            <table id="table_id">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>More Details</th>

                </tr>
                </thead>
                <tbody >
                @foreach($user as $list)
                    <tr>
                        <td>{{$list->name}}</td>
                        <td><a href="mailto:{{$list->email}}">{{$list->email}}</a></td>
                        <td><a href="{{route('applicant.view',['id'=>$list->id])}}">More Details</a></td>

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    </div>

@endsection
