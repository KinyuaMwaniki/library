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
        <table id="data-table" class="display" style="width:100%">
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
                        <td>{{ $issuance->date_issued->format('Y m d') }}</td>
                        <td>{{ $issuance->date_expected->format('Y m d') }}</td>
                        <td>{{ $issuance->date_returned ? $issuance->date_returned->format('Y m d') : '' }}</td>
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
                            {!! Form::open(['route' => ['issuances.destroy', $issuance->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                @can('update_issuances') 
                                <a href="{{ route('issuances.edit', $issuance->id) }}" class='btn btn-default btn-xs'>
                                    <i class="glyphicon glyphicon-edit"></i>
                                </a>
                                @endcan
                                @can('delete_issuances')
                                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'onclick' => "return confirm('Are you sure?')",
                                ]) !!}
                                @endcan
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('#data-table').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5',
                {
                    extend: 'colvis',
                    columns: ':not(.noVis)',

                }
            ],
            colReorder: true,
        });
    });

</script>
@endsection