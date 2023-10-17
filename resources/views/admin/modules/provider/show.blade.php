@extends('admin.master')

@section('module', 'Provider')
@section('action', 'List')

@push('css')
<link rel="stylesheet" href="{{ asset('administrator/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('administrator/plugins/datatables-responsive/css/responsive.bootstrap4.min.css ') }}">
<link rel="stylesheet" href="{{ asset('administrator/plugins/datatables-buttons/css/buttons.bootstrap4.min.css ') }}">
@endpush

@push('js')
<script src="{{ asset('administrator/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endpush

@push('handlejs')
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
@endpush

@section('content')
<form method="post" action="{{ route('admin.provider.show', ['id'=>$id])}}">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Provider list</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Policy Insurance</th>
                        <th>Type</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Value</th>
                        <th>Rate</th>
                        <th>Price</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach($insurance as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->policy->name}}</td>
                        <td>{{$item->category->name}}</td>
                        <td>{{$item->brand}}</td>
                        <td>{{$item->model}}</td>
                        <td>{{$item->value}}</td>
                        <td>{{$item->rate}}</td>
                        <td>{{$item->price}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <th>ID</th>
                    <th>Policy Insurance</th>
                    <th>Type</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Value</th>
                    <th>Rate</th>
                    <th>Price</th>



                </tfoot>
            </table>
        </div>
    </div>
</form>
@endsection