@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left">
            <h3>Add Role</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">            
            {!! Form::open(['route' => 'role.store']) !!}
                <div class="item form-group">
                    <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Role Name<span
                            class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="name" name="name" required="required" class="form-control ">
                        @error('name')
                            <div class="error text-danger">{{ $message }}</div>
                        @enderror
                        <input type="hidden" name="guard_name" value="web">
                    </div>
                </div>
                <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-2 text-right">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{ route('role.index') }}" class="btn btn-primary">Cancel</a>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
