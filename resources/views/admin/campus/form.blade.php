<div class="form-group">
    <div class="row">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control"  required value="{{old('name')}}">
        <div class="text-danger">
            {{
                $errors->first('name')
            }}
        </div>
    </div>
    <div class="row">
        <label for="location">Location</label>
        <input type="text" name="location" class="form-control" required value="{{old('location')}}">
        <div class="text-danger">
            {{
                $errors->first('location')
            }}
        </div>
    </div>
    <div class="row">
        <label for="phone">Phone</label>
        <input type="number" name="phone" class="form-control" required value="{{old('phone')}}">
        <div class="text-danger">
            {{
                $errors->first('phone')
            }}
        </div>
    </div>
    <div class="row">
        <label for="phone1">Phone alt 1</label>
        <input type="number" name="phone1" class="form-control"  value="{{old('phone1')}}">
        <div class="text-danger">
            {{
                $errors->first('phone1')
            }}
        </div>
    </div>
    <div class="row">
        <label for="phone2">Phone alt 2</label>
        <input type="number" name="phone2" class="form-control"  value="{{old('phone2')}}" >
        <div class="text-danger">
            {{
                $errors->first('phone2')
            }}
        </div>
    </div>
    <div class="row">
        <label for="description">Description</label>
        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
</div>