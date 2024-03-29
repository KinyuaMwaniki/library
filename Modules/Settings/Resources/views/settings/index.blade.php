@extends('adminlte.page')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Current Settings</h3>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 ">
        <table id="data-tables" class="table" style="width:100%">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($headers as $header)
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th class="text-left">{{ strtoupper($header->model->name) }} Module</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th class="text-left">
                            Policy
                        </th>
                        <th class="text-left">
                            Description
                        </th>
                        <th class="text-center">
                            Value
                        </th>
                        <th class="text-center">
                            Change
                        </th>
                    </tr>

                    @foreach ($settings->where('model_id', $header->model->id) as $setting)

                        <tr>
                            <td>
                                <a href="#">{{ $setting->policy }}</a>
                            </td>
                            <td>
                                {{ $setting->description }}
                            </td>
                            <td class="text-center">
                                @if ($setting->value == 'true')
                                    <span class="btn btn-success btn-sm">Yes</span>
                                @elseif($setting->value == 'false')
                                    <span class="btn btn-danger btn-sm">No</span>
                                @else
                                    {{ $setting->value . $setting->postfix }}
                                @endif
                            </td>
                            <td class="text-center">
                                <a class="btn btn-info btn-sm"
                                    href="{{ route('settings.edit', $setting->id) }}">
                                    Change </a>
                            </td>
                        </tr>
                    @endforeach
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
