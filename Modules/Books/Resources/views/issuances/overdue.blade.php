@extends('adminlte.page')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Overdue Books</h3>
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
                        <td class="text-right">
                            <div class='btn-group'>
                                @can('read_issuances')
                                <a class='btn btn-default btn-xs green' href="{{ route('issuances.show', $issuance->id) }}">
                                    <i class="glyphicon glyphicon-eye-open"></i>
                                </a>
                                @endcan
                                @can('update_issuances') 
                                <a href="{{ route('issuances.edit', $issuance->id) }}" class='btn btn-default btn-xs'>
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