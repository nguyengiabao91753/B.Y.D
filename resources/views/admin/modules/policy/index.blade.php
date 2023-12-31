@extends('admin.master')

@section('module', 'Policy')
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

    $(function() {
        $("#example2").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
    });

    function confirmDelete() {
        return confirm('Are you sure you want to delete this?');
    }

    function confirmRestore() {
        return confirm('Are you sure you want to restore this?');
    }


    function confirmDelete_Frv() {
        return confirm('This data can not restore anymore. Are you sure you want to delete this?');
    }
</script>
@endpush
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Policy list</h3>

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
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Create At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($policies as $policy)
                @if($policy->status ==1 )

                @php
                $image= asset('uploads/'.$policy->image)
                @endphp
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><img src="{{ $image }}" width="100px"></td>
                    <td>{{$policy->name}}</td>
                    <td>{{ \Illuminate\Support\Str::limit($policy->description, 30, '...') }}</td>
                    <td><span class="right badge badge-success">Show</span></td>
                    <td>{{ date('d/m/Y - H:m:i', strtotime($policy->created_at)) }}</td>
                    <td><a href="{{route('admin.policy.edit',['id'=> $policy->id])}}">Edit</a></td>
                    <td><a onclick="return confirmDelete()" href="{{route('admin.policy.destroy',['id'=> $policy->id])}}">Delete</a></td>
                </tr>
                @endif
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Create At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<!-- /.card -->

@if(Auth::check() && Auth::user()->id == 1 && Auth::user()->level == 1)
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Policy deleted list</h3>

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
        <table id="example2" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Create At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($policies as $policy)
                @if($policy->status ==2 )
                    @php
                        $image= asset('uploads/'.$policy->image)
                    @endphp
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><img src="{{ $image }}" width="100px"></td>
                    <td>{{$policy->name}}</td>
                    <td>{{ \Illuminate\Support\Str::limit($policy->description, 30, '...') }}</td>
                    <td><span class="right badge badge-dark">Hidden</span></td>
                    <td>{{ date('d/m/Y - H:m:i', strtotime($policy->created_at)) }}</td>
                    <td><a onclick="return confirmRestore()" href="{{route('admin.policy.restore',['id'=> $policy->id])}}">Restore</a></td>
                    <td><a onclick="return confirmDelete_Frv()" href="{{route('admin.policy.destroy_frv',['id'=> $policy->id])}}">Delete</a></td>
                </tr>
                @endif
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Create At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@else
<strong>You are not authorized to access this page.</strong>
@endif
@endsection