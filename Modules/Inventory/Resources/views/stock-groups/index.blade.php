@extends('adminlte.page')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Stock Group</h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5  form-group pull-right">
                @can('create_stock_group')
                    <a href="{!!  route('stk_group.create') !!}" class="btn btn-primary pull-right" type="button">Add New</a>
                @endcan
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 ">
        <table id="data-table" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Description</th>
                    <th>Sales Ledger Account</th>
                    <th>Puchase Ledger Account</th>
                    <th>Adjustment Ledger Account</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stock_groups as $stock_group)
                    <tr>
                        <td>{{ $stock_group->code }}</td>
                        <td>{{ $stock_group->description }}</td>
                        <td>{{ $stock_group->sales_ledger_id }}</td>
                        <td>{{ $stock_group->purchase_ledger_id }}</td>
                        <td>{{ $stock_group->adjustment_ledger_id }}</td>
                        <td class="text-right">
                            {!! Form::open(['route' => ['stk_group.destroy', $stock_group->group_id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                @can('update_stock_group') 
                                <a href="{{ route('stk_group.edit', $stock_group->group_id) }}" class='btn btn-default btn-xs'>
                                    <i class="glyphicon glyphicon-edit"></i>
                                </a>
                                @endcan
                                @can('read_stock_group') 
                                <a href="{{ route('stk_group.show', $stock_group->group_id) }}" class='btn btn-default btn-xs'>
                                    <i class="glyphicon glyphicon-eye-open"></i>
                                </a>
                                @endcan
                                @can('delete_stock_group')
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
            <tfoot>
                <tr>
                    <th>Code</th>
                    <th>Description</th>
                    <th>Sales Ledger Account</th>
                    <th>Puchase Ledger Account</th>
                    <th>Adjustment Ledger Account</th>
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
