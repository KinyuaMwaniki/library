<!-- Policy Field -->
<div class="form-group col-sm-12">
    {!! Form::label('policy', 'Policy') !!}
    {!! Form::text('policy', null, ['class' => 'form-control', 'disabled' => 'disabled']) !!}
    @error('policy')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Description Field -->
<div class="form-group col-sm-12">
    {!! Form::label('description', 'Description') !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'disabled' => 'disabled']) !!}
    @error('description')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- True of false Field -->
@if ($setting->value == 'true' || $setting->value == 'false')
    <div class="form-group col-sm-6">
        {!! Form::label('value', 'Value<span class="required-marker">*</span>', '', false) !!}
        {!! Form::select('value', ['true' => 'Yes', 'false' => 'No'], $setting->value, ['class' => 'form-control']) !!}
        @error('value')
            <div class="error text-danger">{{ $message }}</div>
        @enderror
    </div>
@else
    <div class="form-group col-sm-12">
        {!! Form::label('value', 'Value') !!}
        {!! Form::text('value', null, ['class' => 'form-control', 'required' => 'required']) !!}
        @error('value')
            <div class="error text-danger">{{ $message }}</div>
        @enderror
    </div>
@endif

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('settings.index') }}" class="btn btn-info">Back</a>
</div>
