<?php

namespace App\Http\Requests\Admin\Type;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'car_type' => 'unique:type_vehicles,car_type,'.$this->id,
            'bike_type' => 'unique:type_vehicles,bike_type,'.$this->id,
        ];
    }

    public function messages (): array
    {
        return [
            // 'car_type.required' => 'Please enter Car Brand',
            'car_type.unique' => 'This Brand already exists',
            // 'bike_type.required' => 'Please enter Motobike Brand',
            'bike_type.unique' => 'This Brand already exists',
        ];
    }
}
