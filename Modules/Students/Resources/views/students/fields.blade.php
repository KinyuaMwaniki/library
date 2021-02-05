<!-- First Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name<span class="required-marker">*</span>', '', false) !!}
    {!! Form::text('first_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    @error('first_name')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- First Field -->
<div class="form-group col-sm-6">
    {!! Form::label('middle_name', 'Middle Name<span class="required-marker">*</span>', '', false) !!}
    {!! Form::text('middle_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    @error('middle_name')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- First Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name<span class="required-marker">*</span>', '', false) !!}
    {!! Form::text('last_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    @error('last_name')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- First Field -->
<div class="form-group col-sm-6">
    {!! Form::label('student_number', 'Student Number<span class="required-marker">*</span>', '', false) !!}
    {!! Form::text('student_number', null, ['class' => 'form-control', 'required' => 'required']) !!}
    @error('student_number')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('students.index') }}" class="btn btn-info">Back</a>
</div>
