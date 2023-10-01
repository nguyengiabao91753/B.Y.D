@extends('admin.master')

@section('module', 'Invoice')
@section('action', 'Create')

@section('content')
<form method="post" action="{{ route('admin.invoice.store') }}">
    @csrf
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Invoice create</h3>

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
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Contract</label>
                        <select name="contract_id" class="form-controll">
                            <option value="0"{{ old('contract_id')==0 ? 'selected' : '' }}>------- Root -------</option>
                            @foreach($contracts as $contract)
                                <option value="{{$contract->id}}" {{old('contract_id')==$contract->id ? 'selected' : ''}}>{{$contract->id}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="duedate">Date:</label>
                        <input type="date" id="duedate" class="form-control" name="duedate" min="2018-09-24" max="2025-10-20"
                            placeholder="Enter Date" value="{{ old('duedate')}}">
                    </div>
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