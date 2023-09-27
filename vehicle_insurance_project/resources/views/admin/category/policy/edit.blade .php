@extends('admin.app')
@section('content')
<form method="POST" action="{{ route('admin.category.policy.update', ['id' => $policy->policy_id]) }}" enctype="multipart/form-data">
    @csrf

    <label for="PolicyName">Policy Name:</label>
    <input type="text" name="PolicyName" value="{{old('policyname',$policy->policyname)}}" required><br>

    <label for="PolicyDescription">Description:</label>
    <textarea name="PolicyDescription" value="{{old('description',$policy->description)}}" required></textarea><br>

    <label for="VehicleType">Vehicle Type:</label>
    <select name="VehicleTypeID" required>
        @foreach($vehicleTypes as $vehicleType)
            <option value="{{ $vehicleType->vehicle_id }}">{{old('typename',$vehicleType->typename)}}</option>
        @endforeach
    </select><br>

    <label for="EngineDisplacement">Engine Displacement:</label>
    <select name="DisplacementID" required>
        @foreach($engineDisplacements as $engineDisplacement)
            <option value="{{ $engineDisplacement->displacement_id }}">{{old('value',$engineDisplacement->value) }}</option>
        @endforeach
    </select><br>
    <select name="provider" required>
        @foreach($providers as $provider)
        <option value="{{ $provider->provider_id }}">{{old('providername',$provider->providername)}}</option>
        @endforeach
    </select><br>
    <label for="Price">Price:</label>
    <input type="text" name="Price" value="{{old('price',$policy->price)}}" required><br>

    <button type="submit">Edit</button>
</form>

@section('content')