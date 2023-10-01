<?php

namespace App\Http\Requests\Admin\PKR;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'car_pkr' => 'unique:pkr_vehicles,car_pkr',
            'bike_pkr' => 'unique:pkr_vehicles,bike_pkr',
        ];
    }

    public function messages (): array
    {
        return [
            // 'car_type.required' => 'Please enter Car Brand',
            'car_pkr.unique' => 'This Value already exists',
            // 'bike_type.required' => 'Please enter Motobike Brand',
            'bike_pkr.unique' => 'This Value already exists',
        ];
    }
}
