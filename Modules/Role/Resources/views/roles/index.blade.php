@extends('adminlte.page')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Roles</h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5  form-group pull-right">
                <div class="input-group pull-right">
                    <a href="{!! route('role.create') !!}" class="btn btn-primary" type="button">Add New</a>
                </div>
            </div>
        </div>
        <div>
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
            @if($errors->any())
                {!! implode('', $errors->all('<div>:message</div>')) !!}
            @endif
        </div>
    </div>
@endsection
