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
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });

    $(function () {
      $("#example2").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
    });

    function confirmDelete (module) {
        return confirm('Are you sure you want to delete this ${module} ?');
    }
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
                    <th>Name</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Create At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Show</th>
                </tr>
            </thead>
            <tbody>
                @foreach($providers as $provider)
                @if($provider->status == 1)
                        @php
                            $image= asset('uploads/'.$provider->image)
                        @endphp

                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$provider->name}}</td>
                        <td><img src="{{ $image }}" width="100px"></td>
                        <td><span class="right badge badge-success">Show</span></td>
                        <td>{{ date('d/m/Y - H:m:i', strtotime($provider->created_at)) }}</td>
                        <td><a href="{{route('admin.provider.edit',['id'=> $provider->id])}}">Edit</a></td>
                        <td><a onclick="return confirmDelete('provider')" href="{{route('admin.provider.destroy',['id'=> $provider->id])}}">Delete</a></td>
                        <td><a href="{{route('admin.provider.show',['id'=> $provider->id])}}">Show</a></td>
                    </tr>
                @endif
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Create At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Show</th>
            </tfoot>
        </table>
    </div>
</div>

@if(Auth::check() && Auth::user()->id == 1 && Auth::user()->level == 1)
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Provider Deleted list</h3>

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
                    <th>Name</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Create At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($providers as $provider)
                @if($provider->status == 2)
                        @php
                            $image= asset('uploads/'.$provider->image)
                        @endphp

                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$provider->name}}</td>
                        <td><img src="{{ $image }}" width="100px"></td>
                        <td><span class="right badge badge-dark">Hidden</span></td>
                        <td>{{ date('d/m/Y - H:m:i', strtotime($provider->created_at)) }}</td>
                        <td><a onclick="return confirmRestore()" href="{{route('admin.provider.restore',['id'=> $provider->id])}}">Restore</a></td>
                    <td><a onclick="return confirmDelete_Frv()" href="{{route('admin.provider.destroy_frv',['id'=> $provider->id])}}">Delete</a></td>
                    </tr>
                @endif
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Create At</th>
                    <th>Edit</th>
                    <th>Delete</th>
            </tfoot>
        </table>
    </div>
</div>
<!-- /.card -->
@else
<strong>You are not authorized to access this page.</strong>
@endif

@endsection