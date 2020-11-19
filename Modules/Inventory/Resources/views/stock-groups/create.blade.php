@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left ml-4">
            <h3>Add Stock Group</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            {!! Form::open(['route' => 'stk_group.store']) !!}
            @include('inventory::stock-groups.fields')
            {!! Form::close() !!}

        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.select2').select2();
            $('.summernote').summernote({
                placeholder: 'Enter Description Here',
                tabsize: 2,
                height: 150
            });
        });

    </script>
@endsection
