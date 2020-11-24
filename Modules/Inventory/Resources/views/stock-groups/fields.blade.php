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

{{-- TODO: Change to accounts model once added --}}

<!-- Sales Account Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sales_ledger_id', 'Sales Account<span class="required-marker">*</span>','',false) !!}
    {!! Form::select('sales_ledger_id', ['1' => 'Account One' , '2' => 'Account Two' , '3' => 'Account Three'], null, ['class' => 'form-control select2']) !!}
    @error('sales_ledger_id')
    <div class="error text-danger">{{ $message }}</div>
@enderror
</div>

<!-- Purchase Account Field -->
<div class="form-group col-sm-6">
    {!! Form::label('purchase_ledger_id', 'Purchase Account<span class="required-marker">*</span>','',false) !!}
    {!! Form::select('purchase_ledger_id', ['1' => 'Account One' , '2' => 'Account Two' , '3' => 'Account Three'], null, ['class' => 'form-control select2']) !!}
    @error('purchase_ledger_id')
    <div class="error text-danger">{{ $message }}</div>
@enderror
</div>

<!-- Adjustment Account Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adjustment_ledger_id', 'Adjustment Account<span class="required-marker">*</span>','',false) !!}
    {!! Form::select('adjustment_ledger_id', ['1' => 'Account One' , '2' => 'Account Two' , '3' => 'Account Three'], null, ['class' => 'form-control select2']) !!}
    @error('adjustment_ledger_id')
    <div class="error text-danger">{{ $message }}</div>
@enderror
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('stk_group.index') }}" class="btn btn-info">Cancel</a>
</div>