<!-- Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code', 'Code<span class="required-marker">*</span>','',false) !!}
    {!! Form::text('code', null, ['class' => 'form-control', 'required' => 'required']) !!}
    @error('code')
    <div class="error text-danger">{{ $message }}</div>
@enderror
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
    @error('description')
    <div class="error text-danger">{{ $message }}</div>
@enderror
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('stk_costing.index') }}" class="btn btn-primary">Cancel</a>
</div>