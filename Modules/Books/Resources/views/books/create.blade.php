@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left ml-4">
            <h3>Add Book</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            {!! Form::open(['route' => 'books.store']) !!}
                @include('books::books.fields')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
