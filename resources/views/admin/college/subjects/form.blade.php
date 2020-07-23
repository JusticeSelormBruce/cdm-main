<div class="row">
    <label for="program">Programme*</label>
    <select name="program_id"  required class="form-control py-2">
        <option value=""> Select Programme to add Subject</option>
        @foreach($programmes as $program)
            <option value="{{$program->id}}" >{{$program->long_name}} <span class="mx-2">{{$program->short_name}}</span></option>
        @endforeach
    </select>
    <div class="text-danger">
        {{
            $errors->first('program_id')
        }}
    </div>
</div>
<div class="row">
    <label for="name">Name*</label>
    <input type="text" name="name" class="form-control"  required>
    <div class="text-danger">
        {{
            $errors->first('name')
        }}
    </div>
</div>
<div class="row">
    <label for="code">Code</label>
    <input type="text" name="code" class="form-control"  >
    <div class="text-danger">
        {{
            $errors->first('code')
        }}
    </div>
</div>
</div>
