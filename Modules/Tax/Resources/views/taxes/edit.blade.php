@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left  ml-4">
            <h3>Edit Tax</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            {!! Form::model($tax, ['route' => ['taxes.update', $tax->tax_id], 'method' => 'patch']) !!}
            @include('tax::taxes.fields')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
