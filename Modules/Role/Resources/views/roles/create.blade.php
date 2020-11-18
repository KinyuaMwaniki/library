@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left">
            <h3>Add Role</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            {!! Form::open(['route' => 'role.store']) !!}
            @include('role::roles.fields')
            {!! Form::close() !!}

        </div>
    </div>
@endsection
