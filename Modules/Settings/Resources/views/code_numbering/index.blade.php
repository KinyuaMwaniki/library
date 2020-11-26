@extends('adminlte.page')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Code Numbering</h3>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 ">
        <table id="data-table" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Module</th>
                    <th>Code Length</th>
                    <th>Alpha Length</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($code_numberings as $single)
                    <tr>
                        <td>{{ $single->model->name }}</td>
                        <td>{{ $single->code_length }}</td>
                        <td>{{ $single->alpha_length }}</td>
                        <td class="text-right">
                            <div class='btn-group'>
                                @can('update_code_numbers')
                                    <a href="{{ route('code_numbers.edit', $single->id) }}"
                                        class='btn btn-default btn-xs'>
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </a>
                                @endcan
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Module</th>
                    <th>Code Length</th>
                    <th>Alpha Length</th>
                    <th class="text-right">Actions</th>
                </tr>
            </tfoot>
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
