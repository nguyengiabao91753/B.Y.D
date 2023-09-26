<?php

namespace App\Http\Requests\Admin\Displacement;

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
            'calue'=>'required|unique:EngineDisplacement,value'
        ];
    }

    public function messages (): array
    {
        return [
            'value.required' => 'Please enter Engine Displacement Value',
            'value.unique' => 'This Value already exists',
        ];
    }
}
