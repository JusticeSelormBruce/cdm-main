
.
<form action="/admin/credit-account" method="post">
    @csrf
<div class="form-group input-group-sm">
    <label for="amount">Amount</label>
    <input type="number" name="amount" required class="form-control">
</div>
    <div class="form-group input-group-sm">
        <label for="date">Date</label>
        <input type="date" name="date" required class="form-control">
    </div>
    <div class="form-group input-group-sm">
        <label for="rceipt_no">Receipt No</label>
        <input type="rceipt_no" name="rceipt_no" required class="form-control">
    </div>
    <div class="form-group input-group-sm">
        <label for="academic_year">Academic Year</label>
        <select name="academic_year" id="" required class="form-control">
            <option value="">Select Academic Year</option>
            @foreach($academic_year as $list)
                <option value="{{$list->year}}">{{$list->year}}</option>
                @endforeach
        </select>
    </div>
    <div class="form-group input-group-sm">
        <label for="semester">Academic Semester</label>
        <select name="semester" id="" required class="form-control">
            <option value="">Select Semester </option>
            @foreach($semester as $list)
                <option value="{{$list->semester}}">{{$list->semester}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group input-group-sm">
        <label for="student_name">User Details</label>
        <select name="student_name" id="" required class="form-control">
            <option value="">Select Student to Credit Account </option>
            @foreach($user as $list)
                <option value="{{$list->name}}">{{$list->name}} <span class="mx-2">{{$list->name}}</span></option>
            @endforeach
        </select>
    </div>
    <div class="form-group input-group-sm">
        <label for="campus">Campus</label>
        <select name="campus" id="" required class="form-control">
            <option value="">Select Associated Campus </option>
            @foreach($campus as $list)
                <option value="{{$list->name}}">{{$list->name}} </option>
            @endforeach
        </select>
    </div>
    <div class="form-group input-group-sm">

        <input type="hidden" name="credited_by" required class="form-control" value="{{Auth::user()->email}} ({{Auth::user()->name}})">
    </div>
    <div class="row">
        <div class="mx-auto">
            <button  class="btn btn-primary btn-sm"> <span class="mx-5">Credit User Account</span></button>
        </div>
    </div>
</form>
