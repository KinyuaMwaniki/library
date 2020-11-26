@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left  ml-4">
            <h3>Edit Code Numbering</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            {!! Form::model($code_number, ['route' => ['code_numbers.update', $code_number->id], 'method' => 'patch']) !!}
                @include('settings::code_numbering.fields')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
