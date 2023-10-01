<?php

namespace App\Http\Requests\Admin\Model;

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
            'car_model' => 'unique:model_vehicles,car_model',
            'bike_model' => 'unique:model_vehicles,bike_model',
        ];
    }

    public function messages (): array
    {
        return [
            // 'car_type.required' => 'Please enter Car Brand',
            'car_model.unique' => 'This Model already exists',
            // 'bike_type.required' => 'Please enter Motobike Brand',
            'bike_model.unique' => 'This Model already exists',
        ];
    }
}
