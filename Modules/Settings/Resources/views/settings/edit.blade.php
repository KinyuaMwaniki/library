@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left  ml-4">
            <h3>Edit Setting</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            {!! Form::model($setting, ['route' => ['settings.update', $setting->id], 'method' => 'patch']) !!}
                @include('settings::settings.fields')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
