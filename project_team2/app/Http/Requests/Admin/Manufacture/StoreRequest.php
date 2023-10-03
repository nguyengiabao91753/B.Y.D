<?php

namespace App\Http\Requests\Admin\Manufacture;

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
            'car_manufacture' => 'unique:manufac_vehicles,car_manufacture',
            'bike_manufacture' => 'unique:manufac_vehicles,bike_manufacture',
        ];
    }

    public function messages (): array
    {
        return [
            // 'car_type.required' => 'Please enter Car Brand',
            'car_manufacture.unique' => 'This Manufacturing Year already exists',
            // 'bike_type.required' => 'Please enter Motobike Brand',
            'bike_manufacture.unique' => 'This Manufacturing Year already exists',
        ];
    }
}
