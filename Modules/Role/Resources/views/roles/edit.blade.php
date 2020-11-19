@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left ml-4">
            <h3>Edit Role {{ $role->id }}</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            {!! Form::model($role, ['route' => ['role.update', $role->id], 'method' => 'patch']) !!}
            @include('role::roles.fields')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
