<?php

namespace App\Http\Requests\Admin\VehicleType;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'typename'=>'required|unique:vehicletypes,typename'
        ];
    }

    public function messages (): array
    {
        return [
            'typename.required' => 'Please enter Vehicle Type',
            'typename.unique' => 'This type already exists',
        ];
    }
}
