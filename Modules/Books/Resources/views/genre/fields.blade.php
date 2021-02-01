<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name<span class="required-marker">*</span>', '', false) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    @error('name')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('students.index') }}" class="btn btn-info">Back</a>
</div>
