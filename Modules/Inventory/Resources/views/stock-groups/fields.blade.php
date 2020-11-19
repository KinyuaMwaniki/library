<!-- Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code', 'Code<span class="required-marker">*</span>','',false) !!}
    {!! Form::text('code', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Sales Account Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sales_ledger_id', 'Sales Account<span class="required-marker">*</span>','',false) !!}
    {!! Form::select('sales_ledger_id', ['1' => 'Account One' , '2' => 'Account Two' , '3' => 'Account Three'], null, ['class' => 'form-control select2']) !!}
</div>

<!-- Purchase Account Field -->
<div class="form-group col-sm-6">
    {!! Form::label('purchase_ledger_id', 'Purchase Account<span class="required-marker">*</span>','',false) !!}
    {!! Form::select('purchase_ledger_id', ['1' => 'Account One' , '2' => 'Account Two' , '3' => 'Account Three'], null, ['class' => 'form-control select2']) !!}
</div>

<!-- Adjustment Account Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adjustment_ledger_id', 'Adjustment Account<span class="required-marker">*</span>','',false) !!}
    {!! Form::select('adjustment_ledger_id', ['1' => 'Account One' , '2' => 'Account Two' , '3' => 'Account Three'], null, ['class' => 'form-control select2']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12">
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control summernote']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('stk_group.index') }}" class="btn btn-primary">Cancel</a>
</div>