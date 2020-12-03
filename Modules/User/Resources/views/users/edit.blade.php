@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left  ml-4">
            <h3>Edit User</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'patch']) !!}
                @include('user::users.fields')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
