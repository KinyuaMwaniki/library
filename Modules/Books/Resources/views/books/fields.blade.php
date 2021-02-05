<div class="form-group col-sm-6">
    {!! Form::label('title', 'Book Title<span class="required-marker">*</span>', '', false) !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
    @error('title')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-sm-6">
    {!! Form::label('author', 'Author<span class="required-marker">*</span>', '', false) !!}
    {!! Form::text('author', null, ['class' => 'form-control', 'required' => 'required']) !!}
    @error('author')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-sm-6">
    {!! Form::label('isbn', 'ISBN') !!}
    {!! Form::text('isbn', null, ['class' => 'form-control']) !!}
    @error('isbn')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-sm-6">
    {!! Form::label('publisher', 'Publisher') !!}
    {!! Form::text('publisher', null, ['class' => 'form-control']) !!}
    @error('publisher')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-sm-6">
    {!! Form::label('publication_date', 'Publication Date') !!}
    {!! Form::date('publication_date', null, ['class' => 'form-control']) !!}
    @error('publication_date')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-sm-6">
    {!! Form::label('genre_id', 'Genre<span class="required-marker">*</span>', '', false) !!}
    {!! Form::select('genre_id', $genres, null, ['class' => 'form-control']) !!}
    @error('genre_id')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-sm-6">
    {!! Form::label('total_stock', 'Total Stock<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('total_stock', null, ['class' => 'form-control', 'required' => 'required']) !!}
    @error('total_stock')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>
{{-- <div class="form-group col-sm-6">
    {!! Form::label('total_available', 'Total Available<span class="required-marker">*</span>', '', false) !!}
    {!! Form::select('total_available', $genres, null, ['class' => 'form-control']) !!}
    @error('total_available')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div> --}}

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('books.index') }}" class="btn btn-info">Back</a>
</div>
