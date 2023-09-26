@extends('admin.app')
@section('content')
<form method="POST" action="{{ route('admin.category.policy.update', ['id' => $item->PolicyID]) }}" enctype="multipart/form-data">
    @csrf

    <label for="PolicyName">Policy Name:</label>
    <input type="text" name="PolicyName" required><br>

    <label for="PolicyDescription">Description:</label>
    <textarea name="PolicyDescription" required></textarea><br>

    <label for="VehicleType">Vehicle Type:</label>
    <select name="VehicleTypeID" required>
        @foreach($vehicleTypes as $vehicleType)
            <option value="{{ $vehicleType->VehicleTypeID }}">{{ $vehicleType->TypeName }}</option>
        @endforeach
    </select><br>

    <label for="EngineDisplacement">Engine Displacement:</label>
    <select name="DisplacementID" required>
        @foreach($engineDisplacements as $engineDisplacement)
            <option value="{{ $engineDisplacement->DisplacementID }}">{{ $engineDisplacement->Displacement }}</option>
        @endforeach
    </select><br>

    <label for="Price">Price:</label>
    <input type="text" name="Price" required><br>

    <button type="submit">Add Policy</button>
</form>

@section('content')