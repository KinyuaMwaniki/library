<div class="item form-group">
    <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Role Name<span
            class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
        {{-- <input type="text" id="name" name="name" required="required" class="form-control "> --}}
        {!! Form::text('name', $role->name, ['class' => 'form-control', 'required' => 'required']) !!}
        @error('name')
            <div class="error text-danger">{{ $message }}</div>
        @enderror
        <input type="hidden" name="guard_name" value="web">
    </div>
</div>
<div class="item form-group">
    <div class="col-md-6 col-sm-6 offset-md-2 text-right">
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="{{ route('role.index') }}" class="btn btn-primary">Cancel</a>
    </div>
</div>