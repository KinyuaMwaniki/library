@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left  ml-4">
            <h3>Edit Stock Costing</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            {!! Form::model($stk_costing, ['route' => ['stk_costing.update', $stk_costing->cost_id], 'method' => 'patch']) !!}
            @include('inventory::stock-costing.fields')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
