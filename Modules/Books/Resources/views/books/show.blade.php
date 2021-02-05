@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left  ml-4">
            <h3>Book Details</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="form-group col-sm-6">
                <h2>Book Title</h2>
                <p> {{ $book->title }}</p>
            </div>
            
            <div class="form-group col-sm-6">
                <h2>Author</h2>
                <p>{{ $book->author }}</p>
            </div>
            
            <div class="form-group col-sm-6">
                <h2>isbn</h2>
                <p>{{ $book->isbn }}</p>
            </div>
            
            <div class="form-group col-sm-6">
                <h2>Publisher</h2>
                <p>{{ $book->publisher }}</p>
            </div>
            
            <div class="form-group col-sm-6">
                <h2>Publication Date</h2>
                <p>{{ $book->publication_date }}</p>
            </div>
            
            <div class="form-group col-sm-6">
                <h2>Genre</h2>
                <p>{{ $book->bookGenre->name }}</p>
            </div>
            
            <div class="form-group col-sm-6">
                <h2>Total Stock</h2>
                <p> {{ $book->total_stock }}</p>
            </div>
            <div class="form-group col-sm-6">
                <h2>Total Available</h2>
                <p> {{ $book->total_available }}</p>
            </div>
            <div class="form-group col-sm-12">
                <a href="{{ route('books.index') }}" class="btn btn-info">Back</a>
            </div>
        </div>
    </div>
@endsection
