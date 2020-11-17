@extends('adminlte.page')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Permissions</h3>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 ">
        <assign-permissions></assign-permissions>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('js/role.js') }}"></script>
@endsection
