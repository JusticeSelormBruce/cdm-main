<div class="form-group">

    <div class="row">
        <label for="long_name">Name*</label>
        <input type="text" name="long_name" class="form-control"  required value="{{old('long_name')}}">
        <div class="text-danger">
            {{
                $errors->first('long_name')
            }}
        </div>
    </div>
    <div class="row">
        <label for="short_name">short Name</label>
        <input type="text" name="short_name" class="form-control"  value="{{old('short_name')}}">
        <div class="text-danger">
            {{
                $errors->first('short_name')
            }}
        </div>
    </div>
    <div class="row">
        <label for="description">Description</label>
        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
</div>
