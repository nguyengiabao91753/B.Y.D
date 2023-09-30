@extends('admin.master')

@section('module', 'Contract')
@section('action', 'Edit')

@section('content')
<form method="post" action="{{ route('admin.contract.update', ['id' => $id]) }}">
    @csrf
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Contract create</h3>

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
            <div class="form-group">
                <label>Customer ID</label>
                <input type="text" class="form-control" placeholder="Enter Customer ID" name="sustomer_id">
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Insurance ID</label>
                        <input type="text" class="form-control" placeholder="Insurance ID" name="insurance_id">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>EndDate</label>
                        <input type="text" class="form-control" placeholder="EndDate" name="enddate">
                    </div>
                </div>
            </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
    <!-- /.card -->
</form>
@endsection