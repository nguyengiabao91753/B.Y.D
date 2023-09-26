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
                <form action="{{ route('admin.category.policy.destroy', ['id' => $item->PolicyID]) }}" method="POST">
                    <a href="{{ route('admin.category.policy.edit', ['id' => $item->PolicyID]) }}" class="btn btn-success">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onClick="return checkDelete('Ban co chac muon xoa thang khua nay khong ?')">Delete</button>
                </form>
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