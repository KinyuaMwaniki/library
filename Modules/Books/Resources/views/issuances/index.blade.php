@extends('adminlte.page')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Issuances</h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5  form-group pull-right">
                @can('create_books')
                    <a href="{!!  route('issuances.create') !!}" class="btn btn-info pull-right" type="button">Add New</a>
                @endcan
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 ">
        <table class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Book</th>
                    <th>Student</th>
                    <th>Date Issued</th>
                    <th>Date Expected</th>
                    <th>Date Returned</th>
                    <th>Status</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($issuances as $issuance)
                    <tr>
                        <td>{{ $issuance->book->title }}</td>
                        <td>{{ $issuance->student->full_name }}</td>
                        <td>{{ \Carbon\Carbon::parse($issuance->date_issued)->format('Y m d') }}</td>
                        <td>{{ \Carbon\Carbon::parse($issuance->date_expected)->format('Y m d') }}</td>
                        <td>{{ $issuance->date_returned ? \Carbon\Carbon::parse($issuance->date_returned)->format('Y m d') : '' }}</td>
                        <td>
                            @if($issuance->status === 0)
                                <i class="fa fa-check green" ></i>
                            @elseif($issuance->status === 1)
                                <i class="fa fa-calendar green"></i>
                            @else
                                <i class="fa fa-exclamation red"></i>
                            @endif
                        </td>
                        <td class="text-right">
                            <div class='btn-group'>
                                @can('read_issuances')
                                <a class='btn btn-default btn-xs green' href="{{ route('issuances.show', $issuance->id) }}">
                                    <i class="glyphicon glyphicon-eye-open"></i>
                                </a>
                                @endcan
                                @can('update_issuances') 
                                <a href="{{ route('issuances.edit', $issuance->id) }}" class='btn btn-default btn-xs blue'>
                                    <i class="glyphicon glyphicon-edit"></i>
                                </a>
                                @endcan
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-md-12 col-sm-12 mt-3 ml-2">
        {{ $issuances->links() }}
    </div>
@endsection