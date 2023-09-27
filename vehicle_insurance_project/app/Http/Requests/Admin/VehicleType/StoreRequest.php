<?php

namespace App\Http\Requests\Admin\VehicleType;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'vehicletype'=>'required|unique:vehicletypes,vehicletype'
        ];
    }

    public function messages (): array
    {
        return [
            'vehicletype.required' => 'Please enter Vehicle Type',
            'vehicletype.unique' => 'This type already exists',
        ];
    }
}
