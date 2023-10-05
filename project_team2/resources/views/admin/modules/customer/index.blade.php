@extends('admin.master')

@section('module', 'Customer')
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

@push('hanldejs')
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });

    function confirmDelete (module) {
        return confirm('Are you sure you want to delete this ${module} ?');
    }
</script>
@endpush
@section('content')
<!-- Default box --> 
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Customer list</h3>

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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Level</th>
                    <th>Create At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$customer->firstname.' '.$customer->lastname}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->phone}}</td>
                        <td>
                            @if($customer->level ==1 && $customer->id ==1)
                                <span class="right badge badge-success">SuperAdmin</span>
                            @elseif($customer->level ==1)
                                <span class="right badge badge-info">Admin</span>
                            @else
                                <span class="right badge badge-dark">Member</span>
                            @endif
                        </td>
                        <td>{{ date('d/m/Y - H:m:i', strtotime($customer->created_at)) }}</td>
                        <td><a href="{{route('admin.customer.edit',['id'=> $customer->id])}}">Edit</a></td>
                        <td><a onclick="return confirmDelete('customer')" href="{{route('admin.customer.destroy',['id'=> $customer->id])}}">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Level</th>
                    <th>Create At</th>
                    <th>Edit</th>
                    <th>Delete</th>
            </tfoot>
        </table>
    </div>
</div>
<!-- /.card -->


@endsection