@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left ml-4">
            <h3>Add Stock Costing</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            {!! Form::open(['route' => 'stk_costing.store']) !!}
                @include('inventory::stock-costing.fields')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
