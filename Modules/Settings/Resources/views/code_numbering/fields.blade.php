<!-- Code Field -->
<div class="form-group col-sm-12">
    {!! Form::label('model', 'Module<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('model', $code_number->model->name, ['class' => 'form-control', 'disabled' => 'disabled']) !!}
    {!! Form::hidden('model_id', $code_number->model_id) !!}


    @error('model_id')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Code Lenth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code_length', 'Code Length<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('code_length', null, ['class' => 'form-control']) !!}
    @error('code_length')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Alpha Lenth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alpha_length', 'Alpha Length<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('alpha_length', null, ['class' => 'form-control']) !!}
    @error('alpha_length')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('inventories.index') }}" class="btn btn-info">Back</a>
</div>
