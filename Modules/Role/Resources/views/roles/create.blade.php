@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left">
            <h3>Add Role</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            {!! Form::open(['route' => 'role.store']) !!}
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Role Name<span
                            class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="name" name="name" required="required" class="form-control ">
                        @error('name')
                            <div class="error">{{ $message }}</div>
                        @enderror
                        <input type="hidden" name="guard_name" value="web">
                    </div>
                </div>
                <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <button class="btn btn-primary" type="button">Cancel</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
