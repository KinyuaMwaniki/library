@extends('adminlte.page')

@section('content')
    
    <div class="page-title">
        <div class="title_left">
            <h3>Roles</h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5  form-group pull-right">
                <a href="{!! route('role.create') !!}" class="btn btn-primary pull-right" type="button">Add New</a>
            </div>
        </div>
    </div>
@endsection
