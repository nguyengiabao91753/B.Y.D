@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="bd"><b>Edit Contract</b></h1><br>

                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('admin.accounts.index') }}">Back</a>
                </div>
        </div>
    </div>
    <form action="{{ route('admin.accounts.update',['id'=>$account->account_id])}}" method="POTS">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div style="width:700px">
                    <strong>ContractID :</strong><br>
                    <input type="text" name="contract_id" value="{{ old('contract_id',$contract->contract_id)}}"class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div style="width:700px">
                    <strong>AccountID :</strong><br>
                    <input type="text" name="account_id" value="{{ old('account_id',$contract->account_id)}}"class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div style="width:700px">
                    <strong>PolicyID :</strong><br>
                    <input type="text" name="policy_id" value="{{old('policy_id',$contract->policy_id)}}"class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div style="width:700px">
                    <strong>EndDate :</strong><br>
                    <input type="text" name="enddate" value="{{old('enddate',$contract->enddate)}}"class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" action="{{route('admin.contract.index')}}">Submit</button>
            </div>
        </div>
    </form>
@endsection