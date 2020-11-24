<!-- Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code', 'Code<span class="required-marker">*</span>', '', false) !!}
    {!! Form::text('code', null, ['class' => 'form-control', 'required' => 'required']) !!}
    @error('code')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description<span class="required-marker">*</span>', '', false) !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
    @error('description')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

{{-- TODO: Change to accounts model once added --}}

<!-- Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('value', 'Value in %<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('value', null, ['class' => 'form-control']) !!}
    @error('value')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Active Field -->
<div class="form-group col-sm-6">
    {!! Form::label('active', 'Active<span class="required-marker">*</span>', '', false) !!}
    <div class="mt-2">
        {!! Form::checkbox('active', '1', null) !!}
    </div>
    @error('active')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('taxes.index') }}" class="btn btn-info">Cancel</a>
</div>
