@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left ml-4">
            <h3>Issue Book</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <issue-books :all_books="{{ json_encode($books) }}"></issue-books>
        </div>
    </div>
@endsection
