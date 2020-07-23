<style>
    .line {
        background-color: #cce5ff;

    }

    hr {
        margin: 0.3rem;
    }

    .bg {
        background-color: white;
    }

    div {
        font-family: -apple-system;
        font-size: 11px !important;
    }

</style>
@extends('layouts.admin')
@section('render')

    <div class="container-fluid pt-5">
        <h3>Bio Information</h3>
        <div class="row py-2">
            <div class="mx-auto">
                <div class="row">
                    @if($avatar == null) <img src="{{ asset("avatar/avatar.png")}}"  style="height: 100px!important; width: 100px!important; border-image: initial" alt="" class="avatar"> @else <img
                        src=" {{Storage::url($avatar->path) }}"   style="height: 100px!important; width: 100px!important; border-image: initial"alt="" class="avatar"> @endif

                </div>
            </div>
        </div>


        <div class="row line py-2 text-uppercase">
            <div class="col-3">Title</div>
            <div class="col-3">Surname</div>
            <div class="col-3">First Name</div>
            <div class="col-3">Middle Name</div>
        </div>
        <div class="row py-2 bg text-uppercase">
            <div class="col-3">{{$applicant->title}}</div>
            <div class="col-3">{{$applicant->lname}}</div>
            <div class="col-3">{{$applicant->fname}}</div>
            <div class="col-3">{{$applicant->mname}}</div>
        </div>
        <div class="row line py-2 text-uppercase">
            <div class="col-3">Sex</div>
            <div class="col-3">Date of Birth</div>
            <div class="col-3">email</div>
            <div class="col-3">Home Phone</div>
        </div>
        <div class="row py-2 bg text-uppercase">
            <div class="col-3">{{$applicant->sex}}</div>
            <div class="col-3">{{$applicant->dob}}</div>
            <div class="col-3">{{$applicant->email}}</div>
            <div class="col-3">{{$applicant->homephone}}</div>
        </div>
        <div class="row line py-2 text-uppercase">
            <div class="col-3">Cell Phone</div>
            <div class="col-3">Fax</div>
            <div class="col-3">Home Address</div>
            <div class="col-3">Postal Address</div>
        </div>
        <div class="row py-2 bg text-uppercase">
            <div class="col-3">{{$applicant->cellphone}}</div>
            <div class="col-3">{{$applicant->fax}}</div>
            <div class="col-3">{{$applicant->homeadd}}</div>
            <div class="col-3">{{$applicant->post_address}}</div>
        </div>
        <div class="row line py-2 text-uppercase">
            <div class="col-3">Region</div>
            <div class="col-3">City</div>
            <div class="col-3">SSNIT</div>
            <div class="col-3">Place of Birth</div>
        </div>
        <div class="row py-2 bg text-uppercase">
            <div class="col-3">{{$applicant->region}}</div>
            <div class="col-3">{{$applicant->city}}</div>
            <div class="col-3">{{$applicant->ssnit}}</div>
            <div class="col-3">{{$applicant->place_of_birth}}</div>
        </div>
        <div class="row line py-2 text-uppercase">
            <div class="col-3">Home Town</div>
            <div class="col-3">Religion</div>
            <div class="col-3">Disability</div>
            <div class="col-3">Denomination</div>
        </div>
        <div class="row py-2 bg text-uppercase">
            <div class="col-3">{{$applicant->hometown}}</div>
            <div class="col-3">{{$applicant->religion}}</div>
            <div class="col-3">{{$applicant->disability}}</div>
            <div class="col-3">{{$applicant->denomination}}</div>
        </div>
        <div class="row line py-2 text-uppercase">
            <div class="col-3">Marital Status</div>
            <div class="col-3">No. of Children</div>
            <div class="col-3">Zip Code</div>
            <div class="col-3">Country</div>
        </div>
        <div class="row py-2 bg text-uppercase">
            <div class="col-3">{{$applicant->marital_status}}</div>
            <div class="col-3">{{$applicant->no_children}}</div>
            <div class="col-3">{{$applicant->zipcode}}</div>
            <div class="col-3">{{$applicant->country}}</div>
        </div>
        <div class="row line py-2 text-uppercase">
            <div class="col-6">Nationality</div>
            <div class="col-6">Languages spoken</div>

        </div>
        <div class="row py-2 bg text-uppercase">
            <div class="col-6">{{$applicant->nationality}}</div>
            <div class="col-6">{{$applicant->langSpoken}}</div>

        </div>

        <hr>
            <h3 class="py-3">Guardian Information</h3>

            <div class="row line py-2 text-uppercase">
                <div class="col-3">Relationship</div>
                <div class="col-3">Full Name</div>
                <div class="col-3">Country</div>

            </div>
            <div class="row py-2 bg text-uppercase">
                <div class="col-3">{{$applicant->relationship}}</div>
                <div class="col-3">{{$applicant->fullname}}</div>
                <div class="col-3">{{$applicant->country}}</div>

            </div>


            <div class="row line py-2 text-uppercase">
                <div class="col-3">Phone 1</div>
                <div class="col-3">Phone 2</div>
                <div class="col-3">Occupation</div>
                <div class="col-3">Company</div>
            </div>
            <div class="row py-2 bg text-uppercase">
                <div class="col-3">{{$applicant->phone1}},</div>
                <div class="col-3">{{$applicant->phone2}}</div>
                <div class="col-3">{{$applicant->occupation}}</div>
                <div class="col-3">{{$applicant->company}}</div>
            </div>

    </div>
@endsection
