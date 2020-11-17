@extends('adminlte.page')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Roles</h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5  form-group pull-right">
                <a href="{!!  route('role.create') !!}" class="btn btn-primary pull-right" type="button">Add New</a>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 ">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Guard Name</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->guard_name }}</td>
                        <td class="text-right">
                            {!! Form::open(['route' => ['role.destroy', $role->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{{ route('role.edit', $role->id) }}" class='btn btn-default btn-xs'>
                                    <i class="glyphicon glyphicon-edit"></i>
                                </a>
                                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'onclick' => "return confirm('Are you sure?')",
                                ]) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Guard Name</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable({
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
                columnDefs: [{
                    targets: 1,
                    className: 'noVis'
                }],
            });
        });

    </script>
@endsection
