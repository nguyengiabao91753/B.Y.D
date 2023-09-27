@extends('admin.app')

@section('content')

<table class="table table-borderd table-sm text-center" style="background-color:azure;">
    <thead>
        <tr>
            <td>
                Policy_ID
            </td>
            <td>
                Policy_Name
            </td>
            <td>
                Description
            </td>
            <td>
                Vehicle_Type_ID
            </td>
            <td>
                Displacement_ID
            </td>
            <td>
                Price
            </td>
            <td>
                Action
            </td>
        </tr>
    </thead>
    <tbody>
        @forelse($InsurancePolicies as $item)
        <tr>
            <td>{{$loop->iterator}}</td>
            <td> {{$item->PolicyName}} </td>
            <td> {{$item->PolicyDescription}} </td>
            <td> {{$item->VehicleTypeID}} </td>
            <td> {{$item->DisplacementID}} </td>
            <td> {{$item->Price}} </td>
            <td>
                <a href="{{route('admin.category.policy.edit',['id'=>$insurancePolicy->policy_id] )}}}" class="btn btn-primary">Edit</a>
                <a href="{{route('admin.category.policy.destroy',['id'=>$insurancePolicy->policy_id] )}}}" class="btn btn-primary" style="background-color:red;">Delete</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7" align="center">No Category</td>
        </tr>
        @endforelse
        
    </tbody>
</table>
    <div>
    <a href="{{route('admin.category.policy.create')}}" class="btn btn-primary">Add</a>
    </div>

@endsection