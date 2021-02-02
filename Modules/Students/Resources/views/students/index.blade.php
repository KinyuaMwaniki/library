@extends('adminlte.page')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Students</h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5  form-group pull-right">
                @can('create_students')
                    <a href="{!!  route('students.create') !!}" class="btn btn-info pull-right" type="button">Add New</a>
                @endcan
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 ">
        <table id="data-table" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Student Number</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->full_name }}</td>
                        <td>{{ $student->student_number }}</td>
                        <td class="text-right">
                            {!! Form::open(['route' => ['students.destroy', $student->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                @can('update_students') 
                                <a href="{{ route('students.edit', $student->id) }}" class='btn btn-default btn-xs'>
                                    <i class="glyphicon glyphicon-edit"></i>
                                </a>
                                @endcan
                                @can('delete_students')
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