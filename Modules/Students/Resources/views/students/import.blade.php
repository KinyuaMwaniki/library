@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left">
            <h3>Import Students</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            @if (isset($errors) && $errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            @if (session()->has('failures'))

            <table class="table table-danger">
                <tr>
                    <th>Row</th>
                    <th>Attribute</th>
                    <th>Errors</th>
                    <th>Value</th>
                </tr>

                @foreach (session()->get('failures') as $validation)
                    <tr>
                        <td>{{ $validation->row() }}</td>
                        <td>{{ $validation->attribute() }}</td>
                        <td>
                            <ul>
                                @foreach ($validation->errors() as $e)
                                    <li>{{ $e }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            {{ $validation->values()[$validation->attribute()] }}
                        </td>
                    </tr>
                @endforeach
            </table>

        @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 ml-3 mb-3">
            <a class="btn btn-sm btn-info" href="/storage/templates/students_import.csv"><i class="fa fa-download"></i> Download Template</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <form class="form" method="POST" action="{{ route('students.import') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group col-sm-6">
                    <input type="file" class="form-control" id="customFile" name = "import">
                    @error('import')
                        <div class="error text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-sm-6">
                    <button type="submit" class="btn btn-info"><i class="fa fa-upload"></i>  Import</button>
                </div>
            </form>
        </div>
    </div>
@endsection
