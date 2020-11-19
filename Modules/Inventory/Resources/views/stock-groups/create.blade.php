@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left">
            <h3>Add Stock Group</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            {!! Form::open(['route' => 'stk_group.store']) !!}
            @include('inventory::stock-group.fields')
            {!! Form::close() !!}

        </div>
    </div>
@endsection
