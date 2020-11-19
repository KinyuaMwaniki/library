<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Role Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    @error('name')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
    <input type="hidden" name="guard_name" value="web">
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('role.index') }}" class="btn btn-primary">Cancel</a>
</div>


