@extends('adminlte.page')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Users</h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5  form-group pull-right">
                @can('create_users')
                    <a href="{!!  route('user.create') !!}" class="btn btn-primary pull-right" type="button">Add New</a>
                @endcan
            </div>
        </div>
    </div>

@endsection

@section('scripts')

@endsection
