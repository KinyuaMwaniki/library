@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left  ml-4">
            <h3>Edit Book</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            {!! Form::model($book, ['route' => ['books.update', $book->id], 'method' => 'patch']) !!}
                @include('books::books.fields')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
