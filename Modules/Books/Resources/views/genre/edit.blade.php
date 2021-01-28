@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left  ml-4">
            <h3>Edit Genre</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            {!! Form::model($genre, ['route' => ['genres.update', $genre->id], 'method' => 'patch']) !!}
                @include('books::genre.fields')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
