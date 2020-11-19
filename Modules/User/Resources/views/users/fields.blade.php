<!-- First Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name<span class="required-marker">*</span>','',false) !!}
    {!! Form::text('first_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>



<!-- Middle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('middle_name', 'Middle Name<span class="required-marker">*</span>','',false) !!}
    {!! Form::text('middle_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Last Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name<span class="required-marker">*</span>','',false) !!}
    {!! Form::text('last_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email<span class="required-marker">*</span>','',false) !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- BirthDay Field -->
<div class="form-group col-sm-6">
    {!! Form::label('birthday', 'BirthDay') !!}
    {!! Form::date('birthday', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender') !!}
    {!! Form::select('gender', ['f', 'm'], null, ['class' => 'form-control select2']) !!}
</div>

<!-- Telephone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telephone', 'Telephone<span class="required-marker">*</span>','',false) !!}
    {!! Form::text('telephone', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_no', 'Id Number<span class="required-marker">*</span>','',false) !!}
    {!! Form::text('id_no', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Employee Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('employee_id', 'Employee ID<span class="required-marker">*</span>','',false) !!}
    {!! Form::text('employee_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department:') !!}
    {!! Form::number('department_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Can Access Field -->
<div class="form-group col-sm-6">
    {!! Form::label('can_access', 'Can Access<span class="required-marker">*</span>','',false) !!}
    {!! Form::select('can_access', ['Yes', 'No'], null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('user.index') }}" class="btn btn-primary">Cancel</a>
</div>