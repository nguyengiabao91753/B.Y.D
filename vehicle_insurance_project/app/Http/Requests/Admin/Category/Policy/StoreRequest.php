<?php

namespace App\Http\Requests\Admin\Category\Policy;

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
            'policy' => 'required|unique:Policy,policyname',
        ];
    }

    public function messages (): array
    {
        return [
            'policy.required' => 'Please enter Policy Name',
            'policy.unique' => 'This Policy Name already exists',
        ];
    }
}
