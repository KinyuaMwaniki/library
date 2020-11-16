@extends('adminlte.page')

@section('content')
    <h3>Index blade layout</h3>

    <ul>
        @foreach ($permissions as $single_menu)
            <li>
                One
            </li>
        @endforeach
    </ul>
@endsection
