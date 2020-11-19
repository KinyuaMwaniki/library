@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left">
            <h3>Edit Stock Group</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            {!! Form::model($stock_group, ['route' => ['stk_group.update', $stock_group->group_id], 'method' => 'patch']) !!}
            @include('inventory::stock-groups.fields')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
