@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left  ml-4">
            <h3>Edit Issuance</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            {!! Form::model($issuance, ['route' => ['issuances.update', $issuance->id], 'method' => 'patch']) !!}
                @include('books::issuances.fields')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
