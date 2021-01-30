@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left ml-4">
            <h3>Add Student</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            {!! Form::open(['route' => 'students.store']) !!}
                @include('students::students.fields')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
