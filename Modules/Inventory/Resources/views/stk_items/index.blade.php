@extends('adminlte.page')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Inventory</h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5  form-group pull-right">
                @can('create_inventories')
                    <a href="{!!  route('inventories.create') !!}" class="btn btn-primary pull-right" type="button">Add New</a>
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
                    <th>Item Group</th>
                    <th>Reorder Level</th>
                    <th>Quantity on hand</th>
                    <th>Active</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stk_items as $stk_item)
                    <tr>
                        <td>{{ $stk_item->Code }}</td>
                        <td>{{ $stk_item->Description }}</td>
                        <td>{{ $stk_item->stockGroup->description }}</td>
                        <td>{{ $stk_item->Re_Ord_Lvl }}</td>
                        <td>{{ $stk_item->QtyOnHand }}</td>
                        <td>{{ $stk_item->ItemActive == 1 ? 'Yes' : 'No' }}</td>
                        <td class="text-right">
                            {!! Form::open(['route' => ['inventories.destroy', $stk_item->StockLink], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                @can('update_inventories') 
                                <a href="{{ route('inventories.edit', $stk_item->StockLink) }}" class='btn btn-default btn-xs'>
                                    <i class="glyphicon glyphicon-edit"></i>
                                </a>
                                @endcan
                                @can('delete_inventories')
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
                    <th>Item Group</th>
                    <th>Reorder Level</th>
                    <th>Quantity on hand</th>
                    <th>Active</th>
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
