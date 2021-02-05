@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left ml-3">
            <h3>Issue Books</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <issue-books 
            :all_books="{{ json_encode($books) }} " 
            :all_students="{{ json_encode($students) }}"
            :all_settings="{{ json_encode($settings) }}"
            :user="{{ json_encode(Auth::user()) }}">
        
            </issue-books>
        </div>
    </div>
@endsection
