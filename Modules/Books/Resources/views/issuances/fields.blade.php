<div class="form-group col-sm-6">
    {!! Form::label('book_id', 'Book Title<span class="required-marker">*</span>', '', false) !!}
    {!! Form::select('book_id', $books, null, ['class' => 'form-control', 'required' => 'required', 'readonly' => 'readonly']) !!}
    @error('book_id')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-sm-6">
    {!! Form::label('student_id', 'Student Name<span class="required-marker">*</span>', '', false) !!}
    {!! Form::select('student_id', $students, null, ['class' => 'form-control', 'required' => 'required', 'readonly' => 'readonly']) !!}
    @error('student_id')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-sm-6">
    {!! Form::label('date_issued', 'Date Issued') !!}
    {!! Form::date('date_issued', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
    @error('date_issued')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-sm-6">
    {!! Form::label('date_expected', 'Date Expected') !!}
    {!! Form::date('date_expected', null, ['class' => 'form-control']) !!}
    @error('date_expected')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-sm-6">
    {!! Form::label('date_returned', 'Date Returned') !!}
    {!! Form::date('date_returned', null, ['class' => 'form-control']) !!}
    @error('date_returned')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-sm-6">
    {!! Form::label('received_by_id', 'Received By') !!}
    <select name="received_by_id" id="" class="form-control">
        <option selected="true" disabled="disabled">Select One</option>
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    @error('received_by_id')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('issuances.index') }}" class="btn btn-info">Back</a>
</div>
